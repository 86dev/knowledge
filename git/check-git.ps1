<#
.DESCRIPTION
This script generates an HTML report of all repositories found
It uses the Path parameter to determine the path of the directory containing all repositories to scan
If Path is empty, it uses the current working directory
.PARAMETER Path
Specifies the directory to scan for reporsitories
#>
Param (
	[Parameter(ValueFromPipeline = $true)][string]$Path = $(Get-Location)
)

Set-Location $Path

$dirs = ,$(Get-Item $Path) +
	$(Get-Item "$Path\_DsiOne") + $(Get-ChildItem "$Path\_DsiOne" -Directory) +
	$(Get-Item "$Path\_Oricom") + $(Get-ChildItem "$Path\_Oricom" -Directory) +
	$(Get-Item "$Path\_lib") + $(Get-ChildItem "$Path\_lib" -Directory) +
	$(Get-ChildItem $Path -Directory)
$result = @()
for ($i = 0; $i -lt $dirs.Length; $i++)
{
	$dir = $dirs[$i]
	$pct = ($i + 1) / $dirs.Length * 100
	$dirName = $dir.Name
	$parent = Split-Path (Split-Path $dir.FullName -Parent) -Leaf
	if ($parent -ne "dev") { $dirName = "$parent/$dirName" }

	Write-Progress -Activity "Checking git for $($dirName)" -PercentComplete $pct -CurrentOperation "Init"
	if (Test-Path "$($dir.FullName)\.git")
	{
		Write-Progress -Activity "Checking git for $($dirName)" -PercentComplete $pct -CurrentOperation "Fetching ..."
		Set-Location $dir.FullName
		git fetch
		Write-Progress -Activity "Checking git for $($dirName)" -PercentComplete $pct -CurrentOperation "Analyzing ..."
		$status = git status -sb --porcelain=v2 | Out-String
		$status -match 'branch.ab \+(?<ahead>\d+) -(?<behind>\d+)' >$null 2>&1
		$branch = $Matches
		$changes = @($status -split '\n' | ForEach-Object -process { $_ -match '^(?:\d+|\?)' } | Where-Object { $_ -match "True" })
		$properties = [ordered]@{ Project = $dirName; Ahead = "+" + $branch.ahead; Behind = "-" + $branch.behind; Changes = $changes.Count; Action = "" }
		if ($branch.behind -gt 0 -and ($branch.ahead -gt 0 -or $changes.Count -gt 0)) { $properties.Action = "conflict" }
		elseif ($changes.Count -gt 0) { $properties.Action = 'commit' }
		elseif ($branch.Ahead -gt 0) { $properties.Action = 'push' }
		elseif ($branch.Behind -gt 0) { $properties.Action = 'pull' }

		$result += New-Object PSObject -Property $properties

		# if ($properties.Action -eq "pull") { $result += & git pull 2>&1 }
		# elseif ($properties.Action -eq "push") { $result += & git push 2>&1 }
	}
}

Clear-Host
Set-Location $Path

$html = "
<html lang=""en"">
    <head>
        <meta charset=""UTF-8"">
        <meta name=""viewport"" content=""width=device-width, initial-scale=1.0"">
        <meta http-equiv=""X-UA-Compatible"" content=""ie=edge"">
        <title>Check Git</title>
        <link rel=""stylesheet"" href=""https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"" integrity=""sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"" crossorigin=""anonymous"">
    </head>
    <body>
		<div class=""container-fluid px-5 py-3"">
			<div class=""row"">
				<div class=""col text-center"">
        			<h1>Check Git</h1>
        			<h3>$Path</h1>
					<p class=""text-muted"">$(Get-Date -Format "f")</p>
				</div>
			</div>
			<div class=""row"">
				<div class=""col"">
					<table class=""table table-striped table-hover table-sm"">
						<thead>
							<tr>
								<th>Project</th>
								<th>Ahead</th>
								<th>Behind</th>
								<th>Changes</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>"
$result | ForEach-Object {
    $class = if ($_.Action -eq "conflict") { "table-danger" } elseif ($_.Action -eq "pull") { "table-primary" } elseif ($_.Action -eq "push") { "table-success" } elseif ($_.Action -ne "") { "table-warning" } else { "" }
    $html = $html + "
							<tr class=""$class"">
								<td>$($_.Project)</td>
								<td>$(if ($_.Ahead -ne "+0") {$_.Ahead} else {''})</td>
								<td>$(if ($_.Behind -ne "-0") {$_.Behind} else {''})</td>
								<td>$(if ($_.Changes -ne "0") {$_.Changes} else {''})</td>
								<td>$($_.Action)</td>
							</tr>"
    }
$html = $html + "
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </body>
</html>"

$tmp = New-TemporaryFile | Rename-Item -NewName { $_ -replace 'tmp$', 'html' } -PassThru
$html | Out-File $tmp.FullName -Encoding utf8
Invoke-Item $tmp.FullName
