# Python Regex Cheatsheet

## Common Tokens
|Definition|Regex|
|-|-:|
|A single character of: a, b or c|`[abc]`|
|A character except: a, b or c|`[^abc]`|
|A character in the range: a-z|`[a-z]`|
|A character not in the range: a-z|`[^a-z]`|
|A character in the range: a-z or A-Z|`[a-zA-Z]`|
|Any single character|`.`|
|Alternate - match either a or b|`a\|b`|
|Any whitespace character|`\s`|
|Any non-whitespace character|`\S`|
|Any digit|`\d`|
|Any non-digit|`\D`|
|Any word character|`\w`|
|Any non-word character|`\W`|
|Match everything enclosed|`(?:...)`|
|Capture everything enclosed|`(...)`|
|Zero or one of a|`a?`|
|Zero or more of a|`a*`|
|One or more of a|`a+`|
|Exactly 3 of a|`a{3}`|
|3 or more of a|`a{3,}`|
|Between 3 and 6 of a|`a{3,6}`|
|Start of string|`^`|
|End of string|`$`|
|A word boundary|`\b`|
|Non-word boundary|`\B`|


## General Tokens
|Definition|Regex|
|-|-:|
|Newline|`\n`|
|Carriage return|`\r`|
|Tab|`\t`|
|Null character|`\0`|


## Anchors
|Definition|Regex|
|-|-:|
|Start of string|`^`|
|End of string|`$`|
|Start of string|`\A`|
|End of string|`\Z`|
|A word boundary|`\b`|
|Non-word boundary|`\B`|


## Meta Sequences
|Definition|Regex|
|-|-:|
|Any single character|`.`|
|Alternate - match either a or b|`a\|b`|
|Any whitespace character|`\s`|
|Any non-whitespace character|`\S`|
|Any digit|`\d`|
|Any non-digit|`\D`|
|Any word character|`\w`|
|Any non-word character|`\W`|
|Vertical whitespace character|`\v`|
|Match subpattern number ##|`\##`|
|Hex character YY|`\xYY`|
|Octal character ddd|`\ddd`|
|Backspace character|`[\b]`|
|Makes any character literal|`\`|


## Quantifiers
|Definition|Regex|
|-|-:|
|Zero or one of a|`a?`|
|Zero or more of a|`a*`|
|One or more of a|`a+`|
|Exactly 3 of a|`a{3}`|
|3 or more of a|`a{3,}`|
|Between 3 and 6 of a|`a{3,6}`|
|Greedy quantifier|`a*`|
|Lazy quantifier|`a*?`|


## Group Constructs
|Definition|Regex|
|-|-:|
|Match everything enclosed|`(?:...)`|
|Capture everything enclosed|`(...)`|
|Comment group|`(?##...)`|
|Named Capturing Group|`(?P<name>...)`|
|Inline modifiers|`(?imsxXU)`|
|Localized inline modifiers|`(?imsxXU:...)`|
|Conditional statement|`(?(1)yes\|no)`|
|Match subpattern `name`|`(?P=name)`|
|Positive Lookahead|`(?=...)`|
|Negative Lookahead|`(?!...)`|
|Positive Lookbehind|`(?<=...)`|
|Negative Lookbehind|`(?<!...)`|


## Character Classes
|Definition|Regex|
|-|-:|
|A single character of: a, b or c|`[abc]`|
|A character except: a, b or c|`[^abc]`|
|A character in the range: a-z|`[a-z]`|
|A character not in the range: a-z|`[^a-z]`|
|A character in the range: a-z or A-Z|`[a-zA-Z]`|


## Flags / Modifiers
|Definition|Regex|
|-|-:|
|Global|`g`|
|Multiline|`m`|
|Case insensitive|`i`|
|Ignore whitespace / verbose|`x`|
|Single line|`s`|
|Enable unicode support|`u`|
|Restrict matches to ASCII only|`a`|


## Substitution
|Definition|Regex|
|-|-:|
|Complete match contents|`\g<0>`|
|Contents in capture group 1|`\g<1>`|
|Contents in capture group `foo`|`\g<foo>`|
|Hexadecimal replacement values|`\x20`|
|Hexadecimal replacement values|`\x{06fa}`|
|Insert a tab|`\t`|
|Insert a carriage return|`\r`|
|Insert a newline|`\n`|
|Insert a form-feed|`\f`|
