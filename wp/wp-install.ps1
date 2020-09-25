function Write-Title($text) {
	Write-Host ""
	Write-Host "================================================================================"
	Write-Host $text -ForegroundColor yellow
}

function Read-Default($text, $default) {
    $prompt = Read-Host $text
    return ($default, $prompt)[[bool]$prompt]
}

function plugin_install($name) {
	wp plugin install $name --quiet

	if ($?) {
		Write-Output "	$name installed"
	} else {
		Write-Error "	$name NOT installed"
	}
}

function plugin_activate($name) {
	if ((Test-Path "./wp-content/plugins/$name")) {
		wp plugin activate $name --quiet
	} else {
		wp plugin install --activate $name --quiet
	}

	if ($?) {
		Write-Output "	$name activated"
	} else {
		Write-Error "	$name NOT activated"
	}
}

$project = (Get-Item .).Name

Write-Host "Project $project"
Write-Title "Creating database..."
mysql --user=root --password=***REMOVED*** -e "CREATE DATABASE IF NOT EXISTS $project COLLATE 'utf8_general_ci';" 2> $null

Write-Title "Downloading WP..."
if (!(Test-Path "./wp-settings.php")) {
	$locale = Read-Default "	Locale (default 'fr_FR')" "fr_FR"
	wp core download --locale=$locale
	if ($?) {
		Write-Host "	WP has been downloaded" -ForegroundColor green
	} else {
		Write-Host "	WP has NOT been downloaded" -ForegroundColor red
		exit
	}
} else {
	Write-Host "	WP already downloaded"
}

Write-Title "Configuring WP..."
if (!(Test-Path "./wp-config.php")) {
	$server = Read-Default "	DB Server (default 'localhost')" "localhost"
	$user = Read-Default "	DB User (default 'root')" "root"
	$password = Read-Host "	DB Password"
	$db = Read-Default "	Database (default '$project')" $project
	$prefix = Read-Default "	Prefix (default 'wp_')" "wp_"

	$php = "define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', false);
define('WP_POST_REVISIONS', 10);"

	$php | wp core config --dbhost=$server --dbname=$db --dbuser=$user --dbpass=$password --dbprefix=$prefix --extra-php
	if ($?) {
		Write-Host "	WP has been configured" -ForegroundColor green
	} else {
		Write-Host "	WP has NOT been configured" -ForegroundColor red
		exit
	}
} else {
	Write-Host "	WP has already been configured"
}

Write-Title "Installing WP..."
wp core is-installed --quiet
$is_installed = $?
if (!$is_installed) {
	$multisite = Read-Default "	Multisite ? (y/n, default n)" "n"
	$url = Read-Default "	URL (default 'https://$project.localhost/')" "https://$project.localhost/"
	$login = Read-Default "	Admin Login (default 'jtisseau')" "jtisseau"
	$email = Read-Default "	Admin Email (default 'jonathan.tisseau@86dev.fr')" "jonathan.tisseau@86dev.fr"
	$password = Read-Host "	Admin Password"
	if ($multisite -eq "y") {
		$subdomains = Read-Default "	Use subdomains ? (y/n, default y)" "y"
		if ($subdomains -eq "y") {
			wp core multisite-install --subdomains --url=$url --title=$project --admin_user=$login --admin_email=$email --admin_password=$password --skip-email
		} else {
			wp core multisite-install --url=$url --title=$project --admin_user=$login --admin_email=$email --admin_password=$password --skip-email
		}
	} else {
		wp core install --url=$url --title=$project --admin_user=$login --admin_email=$email --admin_password=$password --skip-email
	}
	if ($?) {
		Write-Host "	WP has been installed" -ForegroundColor green
	} else {
		Write-Host "	WP has NOT been installed" -ForegroundColor red
		exit
	}
} else {
	Write-Host "	WP already installed"
}

Write-Title "Preparing themes..."
Copy-Item -Destination "./wp-content/themes/Avada" -Path "e:/dev/base/wp-content/themes/Avada" -Recurse -ErrorAction SilentlyContinue
Copy-Item -Destination "./wp-content/themes/Avada-Child-Theme" -Path "e:/dev/base/wp-content/themes/Avada-Child-Theme" -Recurse -ErrorAction SilentlyContinue
wp theme activate Avada-Child-Theme --quiet
if ($?) {
	Write-Host "	Avada-Child-Theme has been activated" -ForegroundColor green
} else {
	Write-Host "	Avada-Child-Theme has NOT been activated" -ForegroundColor red
}
wp theme update Avada --quiet
if ($?) {
	Write-Host "	Avada is up-to-date" -ForegroundColor green
} else {
	Write-Host "	Avada is NOT up-to-date" -ForegroundColor red
}
Remove-Item "e:/dev/base/wp-content/themes/twentysixteen" -Recurse -ErrorAction SilentlyContinue
Remove-Item "e:/dev/base/wp-content/themes/twentyseventeen" -Recurse -ErrorAction SilentlyContinue
Remove-Item "e:/dev/base/wp-content/themes/twentytwenty" -Recurse -ErrorAction SilentlyContinue
Write-Host "	Themes prepared"

Write-Title "Preparing plugins..."
plugin_install woocommerce
plugin_activate members
plugin_activate user-switching
plugin_activate contact-form-7
plugin_activate query-monitor
Copy-Item -Destination "./wp-content/plugins/fusion-core" -Path "e:/dev/base/wp-content/plugins/fusion-core" -Recurse -ErrorAction SilentlyContinue
Copy-Item -Destination "./wp-content/plugins/fusion-builder" -Path "e:/dev/base/wp-content/plugins/fusion-builder" -Recurse -ErrorAction SilentlyContinue
plugin_activate fusion-builder
plugin_activate fusion-core
wp plugin update fusion-builder fusion-core --quiet
if ($?) {
	Write-Host "	Plugins are up-to-date" -ForegroundColor green
} else {
	Write-Host "	Plugins are NOT up-to-date" -ForegroundColor red
}
Remove-Item "e:/dev/base/wp-content/plugins/hello.php" -ErrorAction SilentlyContinue
Remove-Item "e:/dev/base/wp-content/plugins/askimet" -Recurse -ErrorAction SilentlyContinue
Write-Host "	Plugins prepared"


Write-Title "Adding .gitignore..."
if (!(Test-Path "./.gitignore")) {
	New-Item -Path . -Name ".gitignore" -ItemType "file" -ErrorAction SilentlyContinue -Value "# Ignore everything in the root except the wp-content directory.
/*
*.lock
!.htaccess
!.gitignore
!.vs-code
!wp-content/

# Ignore everything in the wp-content directory, except the plugins and themes directories.
wp-content/*
!wp-content/plugins/
!wp-content/themes/

# Ignore everything in the plugins directory, except the plugins you specify
wp-content/plugins/*
!wp-content/plugins/$project/
wp-content/plugins/$project/vendor/*
wp-content/plugins/$project/node_modules/*

# Ignore everything in the themes directory, except the themes you specify
wp-content/themes/*
!wp-content/themes/Avada-Child-Theme/
wp-content/themes/Avada-Child-Theme/vendor/*
wp-content/themes/Avada-Child-Theme/node_modules/*
!wp-content/themes/$project/
wp-content/themes/$project/vendor/*
wp-content/themes/$project/node_modules/*"
	Write-Host "	.gitignore has been created" -ForegroundColor green
} else {
	Write-Host "	.gitignore has already been created"
}

Write-Title "Adding git support..."
if (!(Test-Path("./.git"))) {
	$git_url = Read-Default "Git url (default https://github.com/jonathantisseau/$project.git)" "https://github.com/jonathantisseau/$project.git"
	git init
	git remote add origin $git_url

	Write-Host "	git has been initialized" -ForegroundColor green
} else {
	Write-Host "	git has already been initialized"
}

Write-Title "Adding alias..."
if (!(Test-Path("C:/wamp64/alias/$project.conf"))) {
	New-Item -Path "C:/wamp64/alias" -Force -Name "$project.conf" -ItemType File -ErrorAction SilentlyContinue -Value "Alias /$project `"$(Get-Location)/`"

<Directory `"$(Get-Location)`">
	Options Indexes FollowSymLinks MultiViews
	AllowOverride all
	<ifDefine APACHE24>
		Require local
	</ifDefine>
	<ifDefine !APACHE24>
		Order Deny,Allow
		Deny from all
		Allow from localhost ::1 127.0.0.1
	</ifDefine>
</Directory>

<VirtualHost *:8080>
	ServerName $project.localhost
	DocumentRoot $(Get-Location)
	<Directory  `"$(Get-Location)/`">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
		Require ip 192.168.1
	</Directory>
</VirtualHost>

<VirtualHost _default_:443>
	DocumentRoot `"$(Get-Location)`"
	ServerName $project.localhost:443

	<Directory `"$(Get-Location)`">
		AllowOverride All
		Require local
		Require ip 192.168.1
	</Directory>

	SSLEngine on

	SSLCertificateFile `"C:/wamp64/bin/apache/apache2.4.23/conf/cert/certificat.crt`"
	SSLCertificateKeyFile `"C:/wamp64/bin/apache/apache2.4.23/conf/cert/private.key`"

	<FilesMatch `"\.(cgi|shtml|phtml|php)$`">
		SSLOptions +StdEnvVars
	</FilesMatch>
	<Directory `"C:/wamp64/bin/apache/apache2.4.23/cgi-bin`">
		SSLOptions +StdEnvVars
	</Directory>
	BrowserMatch `"MSIE [2-5]`" \
				nokeepalive ssl-unclean-shutdown \
				downgrade-1.0 force-response-1.0

</VirtualHost>"
	Write-Host "	Alias has been created" -ForegroundColor green

	Write-Title "Restarting server..."
	net stop wampapache64 > $null
	net start wampapache64 > $null
	Write-Output "	Server has been restarted"
} else {
	Write-Host "	Alias has already been created"
}

Write-Title "Checking hosts..."
$dns = $false
$hosts = Get-Content "C:\Windows\System32\drivers\etc\hosts"
$dns = ($hosts -like "*$project.localhost*")
if ($dns) {
	Write-Host "	DNS is configured" -ForegroundColor green
} else {
	Write-Host "	DNS is NOT configured" -ForegroundColor red
}

Write-Title "Installation done!" -ForegroundColor yellow