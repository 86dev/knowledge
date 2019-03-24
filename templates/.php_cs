<?php
/**
 * PHP_CS_Fixer configuration file template
 * Uncomment a rule to activate it
 * If you use a predefined set and want to remove a rule, uncomment the rule and set if to false
 * @link https://github.com/FriendsOfPHP/PHP-CS-Fixer
 */

return PhpCsFixer\Config::create()
	->setRules([
		/** List of predefined sets of rules */
		// '@DoctrineAnnotation' => true,
		// '@Symfony' => true,
		// '@PhpCsFixer' => true,
		// '@PSR1' => true,
		// '@PSR2' => true,
		/** align_multiline_comment
		 * Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
		 * Configuration options:
		 * - "comment_type" ("'all_multiline'", "'phpdocs_like'", "'phpdocs_only'"): whether
		 *   to fix PHPDoc comments only ("phpdocs_only"), any multi-line comment
		 *   whose lines all start with an asterisk ("phpdocs_like") or any
		 *   multi-line comment ("all_multiline"); defaults to "'phpdocs_only'"
		 * @used-by PhpCsFixer
		 */
		'align_multiline_comment' => ['comment_type' => 'phpdocs_like'],
		/** array_indentation
		 * Each element of an array must be indented exactly once.
		 * @used-by PhpCsFixer
		 */
		'array_indentation' => true,
		/** array_syntax
		 * PHP arrays should be declared using the configured syntax.
		 * Configuration options:
		 * - "syntax" ("'long'", "'short'"): whether to use the "long" or "short" array
		 *   syntax; defaults to "'long'"
		 * @used-by PhpCsFixer
		 */
		'array_syntax' => ['syntax' => 'short'],
		/** backtick_to_shell_exec
		 * Converts backtick operators to "shell_exec" calls.
		 */
		'backtick_to_shell_exec' => true,
		/** binary_operator_spaces
		 * Binary operators should be surrounded by space as configured.
		 * Configuration options:
		 * - "default" ("'align'", "'align_single_space'", "'align_single_space_minimal'",
		 *   "'no_space'", "'single_space'", "null"): default fix strategy; defaults to
		 *   "'single_space'"
		 * - "operators" ("array"): dictionary of "binary operator" => "fix strategy"
		 *   values that differ from the default strategy; defaults to "[]"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'binary_operator_spaces' => true,
		/** blank_line_after_namespace
		 * There MUST be one blank line after the namespace declaration.
		 * @ruleset PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'blank_line_after_namespace' => true,
		/** blank_line_after_opening_tag
		 * Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'blank_line_after_opening_tag' => true,
		/** blank_line_before_statement
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * An empty line feed must precede any configured statement.
		 * Configuration options:
		 * - "statements" (a subset of "['break', 'case', 'continue', 'declare',
		 *   'default', 'die', 'do', 'exit', 'for', 'foreach', 'goto', 'if',
		 *   'include', 'include_once', 'require', 'require_once', 'return',
		 *   'switch', 'throw', 'try', 'while', 'yield']"): list of statements which
		 *   must be preceded by an empty line; defaults to "['break', 'continue',
		 *   'declare', 'return', 'throw', 'try']"
		 */
		// 'blank_line_before_statement' => true,
		/** braces
		 * The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
		 * Configuration options:
		 * - "allow_single_line_closure" ("bool"): whether single line lambda notation should be allowed; defaults to "false"
		 * - "position_after_anonymous_constructs" ("'next'", "'same'"): whether the
		 *   opening brace should be placed on "next" or "same" line after anonymous
		 *   constructs (anonymous classes and lambda functions); defaults to "'same'"
		 * - "position_after_control_structures" ("'next'", "'same'"): whether the opening
		 *   brace should be placed on "next" or "same" line after control
		 *   structures; defaults to "'same'"
		 * - "position_after_functions_and_oop_constructs" ("'next'", "'same'"): whether
		 *   the opening brace should be placed on "next" or "same" line after
		 *   classy constructs (non-anonymous classes, interfaces, traits, methods
		 *   and non-lambda functions); defaults to "'next'"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'braces' => [
			'allow_single_line_closure' => true,
			'position_after_functions_and_oop_constructs' => 'next',
			'position_after_control_structures' => 'next',
			'position_after_anonymous_constructs' => 'same'
		],
		/** cast_spaces
		 * A single space or none should be between cast and variable.
		 * Configuration options:
		 * - "space" ("'none'", "'single'"): spacing to apply between cast and variable; defaults to "'single'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'cast_spaces' => ['space' => 'none'],
		/** class_attributes_separation
		 * Class, trait and interface elements must be separated with one blank
		 * line.
		 * Configuration options:
		 * - "elements" (a subset of "['const', 'method', 'property']"): list of classy elements;
		 *   'const', 'method', 'property'; defaults to "['const', 'method', 'property']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'class_attributes_separation' => ['elements' => ['const', 'method', 'property']],
		/** class_definition
		 * Whitespace around the keywords of a class, trait or interfaces definition should be one space.
		 * Configuration options:
		 * - "multi_line_extends_each_single_line" ("bool"): whether definitions should be multiline;
		 *   defaults to "false"; DEPRECATED alias: "multiLineExtendsEachSingleLine"
		 * - "single_item_single_line" ("bool"): whether definitions should be single line when including a single item;
		 *   defaults to "false"; DEPRECATED alias: "singleItemSingleLine"
		 * - "single_line" ("bool"): whether definitions should be single line;
		 *   defaults to "false"; DEPRECATED alias: "singleLine"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'class_definition' => true,
		/** class_keyword_remove
		 * Converts "::class" keywords to FQCN strings.
		 */
		// 'class_keyword_remove' => true,
		/** combine_consecutive_issets
		 * Using "isset($var) &&" multiple times should be done in one call.
		 * @used-by PhpCsFixer
		 */
		// 'combine_consecutive_issets' => true,
		/** combine_consecutive_unsets
		 * Calling "unset" on multiple items should be done in one call.
		 * @used-by PhpCsFixer
		 */
		'combine_consecutive_unsets' => true,
		/** combine_nested_dirname
		 * Replace multiple nested calls of "dirname" by only one call with second "$level" parameter. Requires PHP >= 7.0.
		 * @used-by PHP70Migration
		 * @used-by PHP71Migration
		 * @risky risky when the function "dirname" is overridden.
		 */
		// 'combine_nested_dirname' => true,
		/** comment_to_phpdoc
		 * Comments with annotation should be docblock when used on structural elements.
		 * @used-by PhpCsFixer
		 * @risky risky as new docblocks might mean more, e.g. a Doctrine entity might have a new column in database.
		 */
		// 'comment_to_phpdoc' => true,
		/** compact_nullable_typehint
		 * Remove extra spaces in a nullable typehint.
		 * @used-by PhpCsFixer
		 */
		// 'compact_nullable_typehint' => true,
		/** concat_space
		 * Concatenation should be spaced according configuration.
		 * Configuration options:
		 * - "spacing" ("'none'", "'one'"): spacing to apply around concatenation operator; defaults to "'none'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'concat_space' => ['spacing' => 'none'],
		/** date_time_immutable
		 * Class "DateTimeImmutable" should be used instead of "DateTime".
		 * @risky risky when the code relies on modifying "DateTime" objects or if any of the "date_create*" functions are overridden.*
		 */
		// 'date_time_immutable' => true,
		/** declare_equal_normalize
		 * Equal sign in declare statement should be surrounded by spaces or not
		 * following configuration.
		 * Configuration options:
		 * - "space" ("'none'", "'single'"): spacing to apply around the equal sign;
		 *   defaults to "'none'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'declare_equal_normalize' => ['space' => 'single'],
		/** declare_strict_types
		 * Force strict types declaration in all files. Requires PHP >= 7.0.
		 * @used-by PHP70Migration
		 * @used-by PHP71Migration
		 * @risky forcing strict types will stop non strict code from working.*
		 */
		// 'declare_strict_types' => true,
		/** dir_constant
		 * Replaces "dirname(__FILE__)" expression with equivalent "__DIR__" constant.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when the function "dirname" is overridden.*
		 */
		'dir_constant' => true,
		/** doctrine_annotation_array_assignment
		 * Doctrine annotations must use configured operator for assignment in
		 * arrays.
		 * Configuration options:
		 * - "ignored_tags" ("array"): list of tags that must not be treated as Doctrine
		 *   Annotations; defaults to "['abstract', 'access', 'code', 'deprec',
		 *   'encode', 'exception', 'final', 'ingroup', 'inheritdoc', 'inheritDoc',
		 *   'magic', 'name', 'toc', 'tutorial', 'private', 'static', 'staticvar',
		 *   'staticVar', 'throw', 'api', 'author', 'category', 'copyright',
		 *   'deprecated', 'example', 'filesource', 'global', 'ignore', 'internal',
		 *   'license', 'link', 'method', 'package', 'param', 'property',
		 *   'property-read', 'property-write', 'return', 'see', 'since', 'source',
		 *   'subpackage', 'throws', 'todo', 'TODO', 'usedBy', 'uses', 'var',
		 *   'version', 'after', 'afterClass', 'backupGlobals',
		 *   'backupStaticAttributes', 'before', 'beforeClass',
		 *   'codeCoverageIgnore', 'codeCoverageIgnoreStart',
		 *   'codeCoverageIgnoreEnd', 'covers', 'coversDefaultClass',
		 *   'coversNothing', 'dataProvider', 'depends', 'expectedException',
		 *   'expectedExceptionCode', 'expectedExceptionMessage',
		 *   'expectedExceptionMessageRegExp', 'group', 'large', 'medium',
		 *   'preserveGlobalState', 'requires', 'runTestsInSeparateProcesses',
		 *   'runInSeparateProcess', 'small', 'test', 'testdox', 'ticket', 'uses',
		 *   'SuppressWarnings', 'noinspection', 'package_version', 'enduml',
		 *   'startuml', 'fix', 'FIXME', 'fixme', 'override']"
		 * - "operator" ("':'", "'='"): the operator to use; defaults to "'='"
		 * @used-by DoctrineAnnotation
		 */
		// 'doctrine_annotation_array_assignment' => true,
		/** doctrine_annotation_braces
		 * Doctrine annotations without arguments must use the configured syntax.
		 * Configuration options:
		 * - "ignored_tags" ("array"): list of tags that must not be treated as Doctrine
		 *   Annotations; defaults to "['abstract', 'access', 'code', 'deprec',
		 *   'encode', 'exception', 'final', 'ingroup', 'inheritdoc', 'inheritDoc',
		 *   'magic', 'name', 'toc', 'tutorial', 'private', 'static', 'staticvar',
		 *   'staticVar', 'throw', 'api', 'author', 'category', 'copyright',
		 *   'deprecated', 'example', 'filesource', 'global', 'ignore', 'internal',
		 *   'license', 'link', 'method', 'package', 'param', 'property',
		 *   'property-read', 'property-write', 'return', 'see', 'since', 'source',
		 *   'subpackage', 'throws', 'todo', 'TODO', 'usedBy', 'uses', 'var',
		 *   'version', 'after', 'afterClass', 'backupGlobals',
		 *   'backupStaticAttributes', 'before', 'beforeClass',
		 *   'codeCoverageIgnore', 'codeCoverageIgnoreStart',
		 *   'codeCoverageIgnoreEnd', 'covers', 'coversDefaultClass',
		 *   'coversNothing', 'dataProvider', 'depends', 'expectedException',
		 *   'expectedExceptionCode', 'expectedExceptionMessage',
		 *   'expectedExceptionMessageRegExp', 'group', 'large', 'medium',
		 *   'preserveGlobalState', 'requires', 'runTestsInSeparateProcesses',
		 *   'runInSeparateProcess', 'small', 'test', 'testdox', 'ticket', 'uses',
		 *   'SuppressWarnings', 'noinspection', 'package_version', 'enduml',
		 *   'startuml', 'fix', 'FIXME', 'fixme', 'override']"
		 * - "syntax" ("'with_braces'", "'without_braces'"): whether to add or remove
		 *   braces; defaults to "'without_braces'"
		 * @used-by DoctrineAnnotation
		 */
		// 'doctrine_annotation_braces' => true,
		/** doctrine_annotation_indentation
		 * Doctrine annotations must be indented with four spaces.
		 * Configuration options:
		 * - "ignored_tags" ("array"): list of tags that must not be treated as Doctrine
		 *   Annotations; defaults to "['abstract', 'access', 'code', 'deprec',
		 *   'encode', 'exception', 'final', 'ingroup', 'inheritdoc', 'inheritDoc',
		 *   'magic', 'name', 'toc', 'tutorial', 'private', 'static', 'staticvar',
		 *   'staticVar', 'throw', 'api', 'author', 'category', 'copyright',
		 *   'deprecated', 'example', 'filesource', 'global', 'ignore', 'internal',
		 *   'license', 'link', 'method', 'package', 'param', 'property',
		 *   'property-read', 'property-write', 'return', 'see', 'since', 'source',
		 *   'subpackage', 'throws', 'todo', 'TODO', 'usedBy', 'uses', 'var',
		 *   'version', 'after', 'afterClass', 'backupGlobals',
		 *   'backupStaticAttributes', 'before', 'beforeClass',
		 *   'codeCoverageIgnore', 'codeCoverageIgnoreStart',
		 *   'codeCoverageIgnoreEnd', 'covers', 'coversDefaultClass',
		 *   'coversNothing', 'dataProvider', 'depends', 'expectedException',
		 *   'expectedExceptionCode', 'expectedExceptionMessage',
		 *   'expectedExceptionMessageRegExp', 'group', 'large', 'medium',
		 *   'preserveGlobalState', 'requires', 'runTestsInSeparateProcesses',
		 *   'runInSeparateProcess', 'small', 'test', 'testdox', 'ticket', 'uses',
		 *   'SuppressWarnings', 'noinspection', 'package_version', 'enduml',
		 *   'startuml', 'fix', 'FIXME', 'fixme', 'override']"
		 * - "indent_mixed_lines" ("bool"): whether to indent lines that have content
		 *   before closing parenthesis; defaults to "false"
		 * @used-by DoctrineAnnotation
		 */
		// 'doctrine_annotation_indentation' => true,
		/** doctrine_annotation_spaces
		 * Fixes spaces in Doctrine annotations.
		 * Configuration options:
		 * - "after_argument_assignments" ("null", "bool"): whether to add, remove or
		 *   ignore spaces after argument assignment operator; defaults to "false"
		 * - "after_array_assignments_colon" ("null", "bool"): whether to add, remove or
		 *   ignore spaces after array assignment ":" operator; defaults to "true"
		 * - "after_array_assignments_equals" ("null", "bool"): whether to add, remove or
		 *   ignore spaces after array assignment "=" operator; defaults to "true"
		 * - "around_argument_assignments" ("bool"): whether to fix spaces around
		 *   argument assignment operator; defaults to "true". DEPRECATED: use options
		 *   "before_argument_assignments" and "after_argument_assignments" instead
		 * - "around_array_assignments" ("bool"): whether to fix spaces around array
		 *   assignment operators; defaults to "true". DEPRECATED: use options
		 *   "before_array_assignments_equals", "after_array_assignments_equals",
		 *   "before_array_assignments_colon" and "after_array_assignments_colon"
		 *   instead
		 * - "around_commas" ("bool"): whether to fix spaces around commas; defaults to
		 *   "true"
		 * - "around_parentheses" ("bool"): whether to fix spaces around parentheses;
		 *   defaults to "true"
		 * - "before_argument_assignments" ("null", "bool"): whether to add, remove or
		 *   ignore spaces before argument assignment operator; defaults to "false"
		 * - "before_array_assignments_colon" ("null", "bool"): whether to add, remove or
		 *   ignore spaces before array ":" assignment operator; defaults to "true"
		 * - "before_array_assignments_equals" ("null", "bool"): whether to add, remove or
		 *   ignore spaces before array "=" assignment operator; defaults to "true"
		 * - "ignored_tags" ("array"): list of tags that must not be treated as Doctrine
		 *   Annotations; defaults to "['abstract', 'access', 'code', 'deprec',
		 *   'encode', 'exception', 'final', 'ingroup', 'inheritdoc', 'inheritDoc',
		 *   'magic', 'name', 'toc', 'tutorial', 'private', 'static', 'staticvar',
		 *   'staticVar', 'throw', 'api', 'author', 'category', 'copyright',
		 *   'deprecated', 'example', 'filesource', 'global', 'ignore', 'internal',
		 *   'license', 'link', 'method', 'package', 'param', 'property',
		 *   'property-read', 'property-write', 'return', 'see', 'since', 'source',
		 *   'subpackage', 'throws', 'todo', 'TODO', 'usedBy', 'uses', 'var',
		 *   'version', 'after', 'afterClass', 'backupGlobals',
		 *   'backupStaticAttributes', 'before', 'beforeClass',
		 *   'codeCoverageIgnore', 'codeCoverageIgnoreStart',
		 *   'codeCoverageIgnoreEnd', 'covers', 'coversDefaultClass',
		 *   'coversNothing', 'dataProvider', 'depends', 'expectedException',
		 *   'expectedExceptionCode', 'expectedExceptionMessage',
		 *   'expectedExceptionMessageRegExp', 'group', 'large', 'medium',
		 *   'preserveGlobalState', 'requires', 'runTestsInSeparateProcesses',
		 *   'runInSeparateProcess', 'small', 'test', 'testdox', 'ticket', 'uses',
		 *   'SuppressWarnings', 'noinspection', 'package_version', 'enduml',
		 *   'startuml', 'fix', 'FIXME', 'fixme', 'override']"
		 * @used-by DoctrineAnnotation
		 */
		// 'doctrine_annotation_spaces' => true,
		/** elseif
		 * The keyword "elseif" should be used instead of "else if" so that all control keywords look like single words.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'elseif' => true,
		/** encoding
		 * PHP code MUST use only UTF-8 without BOM (remove BOM).
		 * @used-by PSR1
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'encoding' => true,
		/** ereg_to_preg
		 * Replace deprecated "ereg" regular expression functions with "preg".
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky if the "ereg" function is overridden.*
		 */
		'ereg_to_preg' => true,
		/** error_suppression
		 * Error control operator should be added to deprecation notices and/or removed from other cases.
		 * Configuration options:
		 * - "mute_deprecation_error" ("bool"): whether to add "@" in deprecation notices; defaults to "true"
		 * - "noise_remaining_usages" ("bool"): whether to remove "@" in remaining usages; defaults to "false"
		 * - "noise_remaining_usages_exclude" ("array"): list of global functions to exclude from removing "@"; defaults to "[]"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky because adding/removing "@" might cause changes to code behaviour or if "trigger_error" function is overridden.*
		 */
		// 'error_suppression' => true,
		/** escape_implicit_backslashes
		 * Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not.
		 * Configuration options:
		 * - "double_quoted" ("bool"): whether to fix double-quoted strings; defaults to "true"
		 * - "heredoc_syntax" ("bool"): whether to fix heredoc syntax; defaults to "true"
		 * - "single_quoted" ("bool"): whether to fix single-quoted strings; defaults to "false"
		 * @used-by PhpCsFixer
		 */
		// 'escape_implicit_backslashes' => true,
		/** explicit_indirect_variable
		 * Add curly braces to indirect variables to make them clear to understand.
		 * Requires PHP >= 7.0.
		 * @used-by PhpCsFixer
		 */
		// 'explicit_indirect_variable' => true,
		/** explicit_string_variable
		 * Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
		 * @used-by PhpCsFixer
		 */
		// 'explicit_string_variable' => true,
		/** final_internal_class
		 * Internal classes should be "final".
		 * Configuration options:
		 * - "annotation-black-list" ("array"): class level annotations tags that must be
		 *   omitted to fix the class, even if all of the white list ones are used
		 *   as well. (case insensitive); defaults to "['@final', '@Entity', '@ORM']"
		 * - "annotation-white-list" ("array"): class level annotations tags that must be
		 *   set in order to fix the class. (case insensitive); defaults to
		 *   "['@internal']"
		 * @used-by PhpCsFixer
		 * @risky changing classes to "final" might cause code execution to break.*
		 */
		// 'final_internal_class' => true,
		/** fopen_flag_order
		 * Order the flags in "fopen" calls, "b" and "t" must be last.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when the function "fopen" is overridden.*
		 */
		// 'fopen_flag_order' => true,
		/** fopen_flags
		 * The flags in "fopen" calls must omit "t", and "b" must be omitted or included consistently.
		 * Configuration options:
		 * - "b_mode" ("bool"): the "b" flag must be used ("true") or omitted ("false"); defaults to "true"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when the function "fopen" is overridden.*
		 */
		// 'fopen_flags' => true,
		/** full_opening_tag
		 * PHP code must use the long "<?php" tags or short-echo "<?=" tags and not other tag variations.
		 * @used-by PSR1
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'full_opening_tag' => true,
		/** fully_qualified_strict_types
		 * Transforms imported FQCN parameters and return types in function arguments to short version.
		 * @used-by PhpCsFixer
		 */
		// 'fully_qualified_strict_types' => true,
		/** function_declaration
		 * Spaces should be properly placed in a function declaration.
		 * Configuration options:
		 * - "closure_function_spacing" ("'none'", "'one'"): spacing to use before open parenthesis for closures; defaults to "'one'"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'function_declaration' => true,
		/** function_to_constant
		 * Replace core functions calls returning constants with the constants.
		 * Configuration options:
		 * - "functions" (a subset of "['get_called_class', 'get_class',
		 *   'php_sapi_name', 'phpversion', 'pi']"): list of function names to fix;
		 *   defaults to "['get_class', 'php_sapi_name', 'phpversion', 'pi']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when any of the configured functions to replace are overridden.*
		 */
		// 'function_to_constant' => true,
		/** function_typehint_space
		 * Add missing space between function's argument and its typehint.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'function_typehint_space' => true,
		/** general_phpdoc_annotation_remove
		 * Configured annotations should be omitted from PHPDoc.
		 * Configuration options:
		 * - "annotations" ("array"): list of annotations to remove, e.g. "["author"]";
		 *   defaults to "[]"
		 */
		// 'general_phpdoc_annotation_remove' => true,
		/** hash_to_slash_comment
		 * Single line comments should use double slashes "//" and not hash "#".
		 * DEPRECATED: use "single_line_comment_style" instead.
		 */
		// 'hash_to_slash_comment' => true,
		/** header_comment
		 * Add, replace or remove header comment.
		 * Configuration options:
		 * - "comment_type" ("'comment'", "'PHPDoc'"): comment syntax type; defaults to
		 *   "'comment'"; DEPRECATED alias: "commentType"
		 * - "header" ("string"): proper header content; required
		 * - "location" ("'after_declare_strict'", "'after_open'"): the location of the
		 *   inserted header; defaults to "'after_declare_strict'"
		 * - "separate" ("'both'", "'bottom'", "'none'", "'top'"): whether the header should be
		 *   separated from the file content with a new line; defaults to "'both'"
		 */
		// 'header_comment' => true,
		/** heredoc_indentation
		 * Heredoc/nowdoc content must be properly indented. Requires PHP >= 7.3.
		 */
		// 'heredoc_indentation' => true,
		/** heredoc_to_nowdoc
		 * Convert "heredoc" to "nowdoc" where possible.
		 * @used-by PhpCsFixer
		 */
		'heredoc_to_nowdoc' => true,
		/** implode_call
		 * Function "implode" must be called with 2 arguments in the documented order.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when the function "implode" is overridden.*
		 */
		// 'implode_call' => true,
		/** include
		 * Include/Require and file path should be divided with a single space.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * File path should not be placed under brackets.
		 */
		'include' => true,
		/** increment_style
		 * Pre- or post-increment and decrement operators should be used if possible.
		 * Configuration options:
		 * - "style" ("'post'", "'pre'"): whether to use pre- or post-increment and decrement operators; defaults to "'pre'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'increment_style' => true,
		/** indentation_type
		 * Code MUST use configured indentation type.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'indentation_type' => true,
		/** is_null
		 * Replaces "is_null($var)" expression with "null === $var".
		 * Configuration options:
		 * - "use_yoda_style" ("bool"): whether Yoda style conditions should be used;
		 *   defaults to "true". DEPRECATED: use "yoda_style" fixer instead
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when the function "is_null" is overridden.*
		 */
		'is_null' => true,
		/** line_ending
		 * All PHP files must use same line ending.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'line_ending' => true,
		/** linebreak_after_opening_tag
		 * Ensure there is no code on the same line as the PHP open tag.
		 */
		'linebreak_after_opening_tag' => true,
		/** list_syntax
		 * List ("array" destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
		 * Configuration options:
		 * - "syntax" ("'long'", "'short'"): whether to use the "long" or "short" "list" syntax; defaults to "'long'"
		 */
		'list_syntax' => ['syntax' => 'short'],
		/** logical_operators
		 * Use "&&" and "||" logical operators instead of "and" and "or".
		 * @used-by PhpCsFixer
		 * @risky risky, because you must double-check if using and/or with lower precedence was intentional.*
		 */
		'logical_operators' => true,
		/** lowercase_cast
		 * Cast should be written in lower case.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'lowercase_cast' => true,
		/** lowercase_constants
		 * The PHP constants "true", "false", and "null" MUST be in lower case.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'lowercase_constants' => true,
		/** lowercase_keywords
		 * PHP keywords MUST be in lower case.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'lowercase_keywords' => true,
		/** lowercase_static_reference
		 * Class static references "self", "static" and "parent" MUST be in lower case.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'lowercase_static_reference' => true,
		/** magic_constant_casing
		 * Magic constants should be referred to using the correct casing.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'magic_constant_casing' => true,
		/** magic_method_casing
		 * Magic method definitions and calls must be using the correct casing.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'magic_method_casing' => true,
		/** mb_str_functions
		 * Replace non multibyte-safe functions with corresponding mb function.
		 * @risky risky when any of the functions are overridden.*
		 */
		'mb_str_functions' => true,
		/** method_argument_space
		 * In method arguments and method call, there MUST NOT be a space before
		 * each comma and there MUST be one space after each comma. Argument lists
		 * MAY be split across multiple lines, where each subsequent line is
		 * indented once. When doing so, the first item in the list MUST be on the
		 * next line, and there MUST be only one argument per line.
		 * Configuration options:
		 * - "ensure_fully_multiline" ("bool"): ensure every argument of a multiline
		 *   argument list is on its own line; defaults to "false". DEPRECATED: use
		 *   option "on_multiline" instead
		 * - "keep_multiple_spaces_after_comma" ("bool"): whether keep multiple spaces
		 *   after comma; defaults to "false"
		 * - "on_multiline" ("'ensure_fully_multiline'", "'ensure_single_line'", "'ignore'"):
		 *   defines how to handle function arguments lists that contain newlines;
		 *   defaults to "'ignore'"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'method_argument_space' => true,
		/** method_chaining_indentation
		 * Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
		 * @used-by PhpCsFixer
		 */
		// 'method_chaining_indentation' => true,
		/** method_separation
		 * Methods must be separated with one blank line. DEPRECATED: use "class_attributes_separation" instead.
		 */
		// 'method_separation' => true,
		/** modernize_types_casting
		 * Replaces "intval", "floatval", "doubleval", "strval" and "boolval" function calls with according type casting operator.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky if any of the functions "intval", "floatval", "doubleval", "strval" or "boolval" are overridden.*
		 */
		'modernize_types_casting' => true,
		/** multiline_comment_opening_closing
		 * DocBlocks must start with two asterisks, multiline comments must start
		 * with a single asterisk, after the opening slash. Both must end with a
		 * single asterisk before the closing slash.
		 * @used-by PhpCsFixer
		 */
		'multiline_comment_opening_closing' => true,
		/** multiline_whitespace_before_semicolons
		 * Forbid multi-line whitespace before the closing semicolon or move the
		 * semicolon to the new line for chained calls.
		 * Configuration options:
		 * - "strategy" ("'new_line_for_chained_calls'", "'no_multi_line'"): forbid
		 *   multi-line whitespace or move the semicolon to the new line for chained
		 *   calls; defaults to "'no_multi_line'"
		 * @used-by PhpCsFixer
		 */
		'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
		/** native_constant_invocation
		 * Add leading "\" before constant invocation of internal constant to speed
		 * up resolving. Constant name match is case-sensitive, except for "null",
		 * "false" and "true".
		 * Configuration options:
		 * - "exclude" ("array"): list of constants to ignore; defaults to "['null',
		 *   'false', 'true']"
		 * - "fix_built_in" ("bool"): whether to fix constants returned by
		 *   "get_defined_constants". User constants are not accounted in this list
		 *   and must be specified in the include one; defaults to "true"
		 * - "include" ("array"): list of additional constants to fix; defaults to "[]"
		 * - "scope" ("'all'", "'namespaced'"): only fix constant invocations that are made
		 *   within a namespace or fix all; defaults to "'all'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when any of the constants are namespaced or overridden.*
		 */
		'native_constant_invocation' => [
			'scope' => 'namespaced',
			'fix_built_in' => true,
			'include' => [],
			'exclude' => ['null', 'false', 'true'],
		],
		/** native_function_casing
		 * Function defined by PHP should be called using the correct casing.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'native_function_casing' => true,
		/** native_function_invocation
		 * Add leading "\" before function invocation to speed up resolving.
		 * Configuration options:
		 * - "exclude" ("array"): list of functions to ignore; defaults to "[]"
		 * - "include" ("array"): list of function names or sets to fix. Defined sets are
		 *   "@internal" (all native functions), "@all" (all global functions) and
		 *   "@compiler_optimized" (functions that are specially optimized by Zend);
		 *   defaults to "['@internal']"
		 * - "scope" ("'all'", "'namespaced'"): only fix function calls that are made
		 *   within a namespace or fix all; defaults to "'all'"
		 * - "strict" ("bool"): whether leading "\" of function call not meant to have it
		 *   should be removed; defaults to "false"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when any of the functions are overridden.*
		 */
		'native_function_invocation' => [
			'scope' => 'namespaced',
			'strict' => true,
			'include' => ['@internal'],
			'exclude' => ['null', 'false', 'true'],
		],
		/** new_with_braces
		 * All instances created with new keyword must be followed by braces.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'new_with_braces' => true,
		/** no_alias_functions
		 * Master functions shall be used instead of aliases.
		 * Configuration options:
		 * - "sets" (a subset of "['@internal', '@IMAP', '@mbreg', '@all']"): list of
		 *   sets to fix. Defined sets are "@internal" (native functions), "@IMAP"
		 *   (IMAP functions), "@mbreg" (from "ext-mbstring") "@all" (all listed
		 *   sets); defaults to "['@internal', '@IMAP']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when any of the alias functions are overridden.*
		 */
		'no_alias_functions' => true,
		/** no_alternative_syntax
		 * Replace control structure alternative syntax to use braces.
		 * @used-by PhpCsFixer
		 */
		// 'no_alternative_syntax' => true,
		/** no_binary_string
		 * There should not be a binary flag before strings.
		 * @used-by PhpCsFixer
		 */
		'no_binary_string' => true,
		/** no_blank_lines_after_class_opening
		 * There should be no empty lines after class opening brace.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_blank_lines_after_class_opening' => true,
		/** no_blank_lines_after_phpdoc
		 * There should not be blank lines between docblock and the documented element.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_blank_lines_after_phpdoc' => true,
		/** no_blank_lines_before_namespace
		 * There should be no blank lines before a namespace declaration.
		 */
		// 'no_blank_lines_before_namespace' => true,
		/** no_break_comment
		 * There must be a comment when fall-through is intentional in a non-empty case body.
		 * Configuration options:
		 * - "comment_text" ("string"): the text to use in the added comment and to detect it; defaults to "'no break'"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_break_comment' => ["comment_text" => "no break: intentional fall-through"],
		/** no_closing_tag
		 * The closing "?>" tag MUST be omitted from files containing only PHP.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_closing_tag' => true,
		/** no_empty_comment
		 * There should not be any empty comments.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_empty_comment' => true,
		/** no_empty_phpdoc
		 * There should not be empty PHPDoc blocks.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_empty_phpdoc' => true,
		/** no_empty_statement
		 * Remove useless semicolon statements.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_empty_statement' => true,
		/** no_extra_blank_lines
		 * Removes extra blank lines and/or blank lines following configuration.
		 * Configuration options:
		 * - "tokens" (a subset of "['break', 'case', 'continue', 'curly_brace_block',
		 *   'default', 'extra', 'parenthesis_brace_block', 'return',
		 *   'square_brace_block', 'switch', 'throw', 'use', 'useTrait',
		 *   'use_trait']"): list of tokens to fix; defaults to "['extra']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_extra_blank_lines' => ['tokens' => [
			'break',
			'case',
			'continue',
			'curly_brace_block',
			'default',
			'extra',
			'parenthesis_brace_block',
			'return',
			'square_brace_block',
			'switch',
			'throw',
			'use',
			'useTrait',
			'use_trait'
		]],
		/** no_extra_consecutive_blank_lines
		 * Removes extra blank lines and/or blank lines following configuration.
		 * DEPRECATED: use "no_extra_blank_lines" instead.
		 * Configuration options:
		 * - "tokens" (a subset of "['break', 'case', 'continue', 'curly_brace_block',
		 *   'default', 'extra', 'parenthesis_brace_block', 'return',
		 *   'square_brace_block', 'switch', 'throw', 'use', 'useTrait',
		 *   'use_trait']"): list of tokens to fix; defaults to "['extra']"
		 */
		// 'no_extra_consecutive_blank_lines' => true,
		/** no_homoglyph_names
		 * Replace accidental usage of homoglyphs (non ascii characters) in names.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky renames classes and cannot rename the files. You might have string references to renamed code ("$$name").*
		 */
		// 'no_homoglyph_names' => true,
		/** no_leading_import_slash
		 * Remove leading slashes in "use" clauses.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'no_leading_import_slash' => true,
		/** no_leading_namespace_whitespace
		 * The namespace declaration line shouldn't contain leading whitespace.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_leading_namespace_whitespace' => true,
		/** no_mixed_echo_print
		 * Either language construct "print" or "echo" should be used.
		 * Configuration options:
		 * - "use" ("'echo'", "'print'"): the desired language construct; defaults to "'echo'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_mixed_echo_print' => ["use" => "echo"],
		/** no_multiline_whitespace_around_double_arrow
		 * Operator "=>" should not be surrounded by multi-line whitespaces.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_multiline_whitespace_around_double_arrow' => true,
		/** no_multiline_whitespace_before_semicolons
		 * Multi-line whitespace before closing semicolon are prohibited.
		 * DEPRECATED: use "multiline_whitespace_before_semicolons" instead.
		 */
		// 'no_multiline_whitespace_before_semicolons' => true,
		/** no_null_property_initialization
		 * Properties MUST not be explicitly initialized with "null".
		 * @used-by PhpCsFixer
		 */
		// 'no_null_property_initialization' => true,
		/** no_php4_constructor
		 * Convert PHP4-style constructors to "__construct".
		 * @risky risky when old style constructor being fixed is overridden or overrides parent one.*
		 */
		'no_php4_constructor' => true,
		/** no_short_bool_cast
		 * Short cast "bool" using double exclamation mark should not be used.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_short_bool_cast' => true,
		/** no_short_echo_tag
		 * @used-by PhpCsFixer
		 * Replace short-echo "<?=" with long format "<?php echo" syntax.
		 */
		// 'no_short_echo_tag' => true,
		/** no_singleline_whitespace_before_semicolons
		 * Single-line whitespace before closing semicolon are prohibited.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_singleline_whitespace_before_semicolons' => true,
		/** no_spaces_after_function_name
		 * When making a method or function call, there MUST NOT be a space between
		 * the method or function name and the opening parenthesis.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_spaces_after_function_name' => true,
		/** no_spaces_around_offset
		 * There MUST NOT be spaces around offset braces.
		 * Configuration options:
		 * - "positions" (a subset of "['inside', 'outside']"): whether spacing should be
		 *   fixed inside and/or outside the offset braces; defaults to "['inside',
		 *   'outside']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_spaces_around_offset' => ['positions' => ['inside', 'outside']],
		/** no_spaces_inside_parenthesis
		 * There MUST NOT be a space after the opening parenthesis. There MUST NOT
		 * be a space before the closing parenthesis.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_spaces_inside_parenthesis' => true,
		/** no_superfluous_elseif
		 * Replaces superfluous "elseif" with "if".
		 * @used-by PhpCsFixer
		 */
		// 'no_superfluous_elseif' => true,
		/** no_superfluous_phpdoc_tags
		 * Removes "@param" and "@return" tags that don't provide any useful
		 * information.
		 * Configuration options:
		 * - "allow_mixed" ("bool"): whether type "mixed" without description is allowed
		 *   ("true") or considered superfluous ("false"); defaults to "false"
		 */
		// 'no_superfluous_phpdoc_tags' => true,
		/** no_trailing_comma_in_list_call
		 * Remove trailing commas in list function calls.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_trailing_comma_in_list_call' => true,
		/** no_trailing_comma_in_singleline_array
		 * PHP single-line arrays should not have trailing comma.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_trailing_comma_in_singleline_array' => true,
		/** no_trailing_whitespace
		 * Remove trailing whitespace at the end of non-blank lines.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_trailing_whitespace' => true,
		/** no_trailing_whitespace_in_comment
		 * There MUST be no trailing spaces inside comment or PHPDoc.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_trailing_whitespace_in_comment' => true,
		/** no_unneeded_control_parentheses
		 * Removes unneeded parentheses around control statements.
		 * Configuration options:
		 * - "statements" ("array"): list of control statements to fix; defaults to
		 *   "['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case',
		 *   'yield']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_unneeded_control_parentheses' => true,
		/** no_unneeded_curly_braces
		 * Removes unneeded curly braces that are superfluous and aren't part of a control structure's body.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_unneeded_curly_braces' => true,
		/** no_unneeded_final_method
		 * A final class must not have final methods.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_unneeded_final_method' => true,
		/** no_unreachable_default_argument_value
		 * In function arguments there must not be arguments with default values before non-default ones.
		 * @used-by PhpCsFixer
		 * @risky modifies the signature of functions; therefore risky when using systems (such as some Symfony components) that rely on those (for example through reflection).*
		 */
		// 'no_unreachable_default_argument_value' => true,
		/** no_unset_cast
		 * Variables must be set "null" instead of using "(unset)" casting.
		 * @used-by PhpCsFixer
		 */
		'no_unset_cast' => true,
		/** no_unset_on_property
		 * Properties should be set to "null" instead of using "unset".
		 * @used-by PhpCsFixer
		 * @risky changing variables to "null" instead of unsetting them will mean they still show up when looping over class variables.*
		 */
		'no_unset_on_property' => true,
		/** no_unused_imports
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * Unused "use" statements must be removed.
		 */
		// 'no_unused_imports' => true,
		/** no_useless_else
		 * There should not be useless "else" cases.
		 * @used-by PhpCsFixer
		 */
		// 'no_useless_else' => true,
		/** no_useless_return
		 * There should not be an empty "return" statement at the end of a function.
		 * @used-by PhpCsFixer
		 */
		// 'no_useless_return' => true,
		/** no_whitespace_before_comma_in_array
		 * In array declaration, there MUST NOT be a whitespace before each comma.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_whitespace_before_comma_in_array' => true,
		/** no_whitespace_in_blank_line
		 * Remove trailing whitespace at the end of blank lines.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'no_whitespace_in_blank_line' => true,
		/** non_printable_character
		 * Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
		 * @risky risky when strings contain intended invisible characters.*
		 * Configuration options:
		 * - "use_escape_sequences_in_strings" ("bool"): whether characters should be
		 *   replaced with escape sequences in strings; defaults to "false"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @used-by PHP70Migration
		 * @used-by PHP71Migration
		 */
		'non_printable_character' => ['use_escape_sequences_in_strings' => true],
		/** normalize_index_brace
		 * Array index should always be written by using square braces.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'normalize_index_brace' => true,
		/** not_operator_with_space
		 * Logical NOT operators ("!") should have leading and trailing whitespaces.
		 */
		// 'not_operator_with_space' => true,
		/** not_operator_with_successor_space
		 * Logical NOT operators ("!") should have one trailing whitespace.
		 */
		// 'not_operator_with_successor_space' => true,
		/** object_operator_without_whitespace
		 * There should not be space before or after object "T_OBJECT_OPERATOR" "->".
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'object_operator_without_whitespace' => true,
		/** ordered_class_elements
		 * Orders the elements of classes/interfaces/traits.
		 * Configuration options:
		 * - "order" (a subset of "['use_trait', 'public', 'protected', 'private',
		 *   'constant', 'constant_public', 'constant_protected',
		 *   'constant_private', 'property', 'property_static', 'property_public',
		 *   'property_protected', 'property_private', 'property_public_static',
		 *   'property_protected_static', 'property_private_static', 'method',
		 *   'method_static', 'method_public', 'method_protected', 'method_private',
		 *   'method_public_static', 'method_protected_static',
		 *   'method_private_static', 'construct', 'destruct', 'magic', 'phpunit']"):
		 *   list of strings defining order of elements; defaults to "['use_trait',
		 *   'constant_public', 'constant_protected', 'constant_private',
		 *   'property_public', 'property_protected', 'property_private',
		 *   'construct', 'destruct', 'magic', 'phpunit', 'method_public',
		 *   'method_protected', 'method_private']"
		 * - "sortAlgorithm" ("'alpha'", "'none'"): how multiple occurrences of same type
		 *   statements should be sorted; defaults to "'none'"
		 * @used-by PhpCsFixer
		 */
		'ordered_class_elements' => [
			'order' => [
				'use_trait',
				'constant_public',
				'constant_protected',
				'constant_private',
				'property_public_static',
				'property_protected_static',
				'property_private_static',
				'property_public',
				'property_protected',
				'property_private',
				'construct',
				'destruct',
				'method_public_static',
				'method_protected_static',
				'method_private_static',
				'method_public',
				'method_protected',
				'method_private',
				'magic',
				'phpunit',
			],
			'sortAlgorithm' => 'alpha',
		],
		/** ordered_imports
		 * Ordering "use" statements.
		 * Configuration options:
		 * - "imports_order" ("array", "null"): defines the order of import types; defaults
		 *   to "null"; DEPRECATED alias: "importsOrder"
		 * - "sort_algorithm" ("'alpha'", "'length'", "'none'"): whether the statements
		 *   should be sorted alphabetically or by length, or not sorted; defaults
		 *   to "'alpha'"; DEPRECATED alias: "sortAlgorithm"
		 * @used-by PhpCsFixer
		 */
		'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['const', 'class', 'function']],
		/** php_unit_construct
		 * PHPUnit assertion method calls like "->assertSame(true, $foo)" should be
		 * written with dedicated method like "->assertTrue($foo)".
		 * Configuration options:
		 * - "assertions" (a subset of "['assertSame', 'assertEquals',
		 *   'assertNotEquals', 'assertNotSame']"): list of assertion methods to fix;
		 *   defaults to "['assertEquals', 'assertSame', 'assertNotEquals',
		 *   'assertNotSame']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky fixer could be risky if one is overriding PHPUnit's native methods.*
		 */
		'php_unit_construct' => true,
		/** php_unit_dedicate_assert
		 * PHPUnit assertions like "assertInternalType", "assertFileExists", should be used over "assertTrue".
		 * Configuration options:
		 * - "functions" (a subset of "['array_key_exists', 'empty', 'file_exists',
		 *   'is_array', 'is_bool', 'is_callable', 'is_double', 'is_float',
		 *   'is_infinite', 'is_int', 'is_integer', 'is_long', 'is_nan', 'is_null',
		 *   'is_numeric', 'is_object', 'is_real', 'is_resource', 'is_scalar',
		 *   'is_string']", "null"): list of assertions to fix (overrides "target");
		 *   defaults to "null". DEPRECATED: use option "target" instead
		 * - "target" ("'3.0'", "'3.5'", "'5.0'", "'5.6'", "'newest'"): target version of
		 *   PHPUnit; defaults to "'5.0'"
		 * @used-by PHPUnit30Migration
		 * @used-by PHPUnit32Migration
		 * @used-by PHPUnit35Migration
		 * @used-by PHPUnit43Migration
		 * @used-by PHPUnit48Migration
		 * @used-by PHPUnit50Migration
		 * @used-by PHPUnit52Migration
		 * @used-by PHPUnit54Migration
		 * @used-by PHPUnit55Migration
		 * @used-by PHPUnit56Migration
		 * @used-by PHPUnit57Migration
		 * @used-by PHPUnit60Migration
		 * @risky fixer could be risky if one is overriding PHPUnit's native methods.*
		 */
		'php_unit_dedicate_assert' => ['target' => 'newest'],
		/** php_unit_expectation
		 * Usages of "->setExpectedException*" methods MUST be replaced by "->expectException*" methods.
		 * Configuration options:
		 * - "target" ("'5.2'", "'5.6'", "'newest'"): target version of PHPUnit; defaults to "'newest'"
		 * @used-by PHPUnit52Migration
		 * @used-by PHPUnit54Migration
		 * @used-by PHPUnit55Migration
		 * @used-by PHPUnit56Migration
		 * @used-by PHPUnit57Migration
		 * @used-by PHPUnit60Migration
		 * @risky risky when PHPUnit classes are overridden or not accessible, or when project has PHPUnit incompatibilities.*
		 */
		'php_unit_expectation' => ['target' => 'newest'],
		/** php_unit_fqcn_annotation
		 * PHPUnit annotations should be a FQCNs including a root namespace.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'php_unit_fqcn_annotation' => true,
		/** php_unit_internal_class
		 * All PHPUnit test classes should be marked as internal.
		 * Configuration options:
		 * - "types" (a subset of "['normal', 'final', 'abstract']"): what types of classes to mark as internal; defaults to "['normal', 'final']"
		 * @used-by PhpCsFixer
		 */
		'php_unit_internal_class' => ['types' => ['normal', 'final', 'abstract']],
		/** php_unit_method_casing
		 * Enforce camel (or snake) case for PHPUnit test methods, following
		 * configuration.
		 * Configuration options:
		 * - "case" ("'camel_case'", "'snake_case'"): apply camel or snake case to test
		 *   methods; defaults to "'camel_case'"
		 * @used-by PhpCsFixer
		 */
		// 'php_unit_method_casing' => true,
		/** php_unit_mock
		 * Usages of "->getMock" and
		 * "->getMockWithoutInvokingTheOriginalConstructor" methods MUST be
		 * replaced by "->createMock" or "->createPartialMock" methods.
		 * Configuration options:
		 * - "target" ("'5.4'", "'5.5'", "'newest'"): target version of PHPUnit; defaults to
		 *   "'newest'"
		 * @used-by PHPUnit54Migration
		 * @used-by PHPUnit55Migration
		 * @used-by PHPUnit56Migration
		 * @used-by PHPUnit57Migration
		 * @used-by PHPUnit60Migration
		 * @risky risky when PHPUnit classes are overridden or not accessible, or when project has PHPUnit incompatibilities.*
		 */
		// 'php_unit_mock' => true,
		/** php_unit_namespaced
		 * PHPUnit classes MUST be used in namespaced version, e.g.
		 * "\PHPUnit\Framework\TestCase" instead of "\PHPUnit_Framework_TestCase".
		 * Configuration options:
		 * - "target" ("'4.8'", "'5.7'", "'6.0'", "'newest'"): target version of PHPUnit; defaults to "'newest'"
		 * @used-by PHPUnit48Migration
		 * @used-by PHPUnit50Migration
		 * @used-by PHPUnit52Migration
		 * @used-by PHPUnit54Migration
		 * @used-by PHPUnit55Migration
		 * @used-by PHPUnit56Migration
		 * @used-by PHPUnit57Migration
		 * @used-by PHPUnit60Migration
		 * @risky risky when PHPUnit classes are overridden or not accessible, or when project has PHPUnit incompatibilities.*
		 */
		// 'php_unit_namespaced' => true,
		/** php_unit_no_expectation_annotation
		 * Usages of "@expectedException*" annotations MUST be replaced by "->setExpectedException*" methods.
		 * Configuration options:
		 * - "target" ("'3.2'", "'4.3'", "'newest'"): target version of PHPUnit; defaults to "'newest'"
		 * - "use_class_const" ("bool"): use ::class notation; defaults to "true"
		 * @used-by PHPUnit32Migration
		 * @used-by PHPUnit35Migration
		 * @used-by PHPUnit43Migration
		 * @used-by PHPUnit48Migration
		 * @used-by PHPUnit50Migration
		 * @used-by PHPUnit52Migration
		 * @used-by PHPUnit54Migration
		 * @used-by PHPUnit55Migration
		 * @used-by PHPUnit56Migration
		 * @used-by PHPUnit57Migration
		 * @used-by PHPUnit60Migration
		 * @risky risky when PHPUnit classes are overridden or not accessible, or when project has PHPUnit incompatibilities.*
		 */
		// 'php_unit_no_expectation_annotation' => true,
		/** php_unit_ordered_covers
		 * Order "@covers" annotation of PHPUnit tests.
		 * @used-by PhpCsFixer
		 */
		// 'php_unit_ordered_covers' => true,
		/** php_unit_set_up_tear_down_visibility
		 * Changes the visibility of the "setUp()" and "tearDown()" functions of PHPUnit to "protected", to match the PHPUnit TestCase.
		 * @used-by PhpCsFixer
		 * @risky this fixer may change functions named "setUp()" or "tearDown()" outside of PHPUnit tests, when a class is wrongly seen as a PHPUnit test.*
		 */
		// 'php_unit_set_up_tear_down_visibility' => true,
		/** php_unit_strict
		 * PHPUnit methods like "assertSame" should be used instead of "assertEquals".
		 * Configuration options:
		 * - "assertions" (a subset of "['assertAttributeEquals', 'assertAttributeNotEquals', 'assertEquals', 'assertNotEquals']"):
		 *   list of assertion methods to fix; defaults to "['assertAttributeEquals', 'assertAttributeNotEquals', 'assertEquals', 'assertNotEquals']"
		 * @used-by PhpCsFixer
		 * @risky risky when any of the functions are overridden or when testing object equality.*
		 */
		// 'php_unit_strict' => true,
		/** php_unit_test_annotation
		 * Adds or removes @test annotations from tests, following configuration.
		 * Configuration options:
		 * - "case" ("'camel'", "'snake'"): whether to camel or snake case when adding the test prefix; defaults to "'camel'".
		 *   DEPRECATED: use "php_unit_method_casing" fixer instead
		 * - "style" ("'annotation'", "'prefix'"): whether to use the @test annotation or not; defaults to "'prefix'"
		 * @used-by PhpCsFixer
		 * @risky this fixer may change the name of your tests, and could cause incompatibility with abstract classes or interfaces.*
		 */
		// 'php_unit_test_annotation' => true,
		/** php_unit_test_case_static_method_calls
		 * Calls to "PHPUnit\Framework\TestCase" static methods must all be of the
		 * same type, either "$this->", "self::" or "static::".
		 * Configuration options:
		 * - "call_type" ("'self'", "'static'", "'this'"): the call type to use for referring
		 *   to PHPUnit methods; defaults to "'static'"
		 * - "methods" ("array"): dictionary of "method" => "call_type" values that
		 *   differ from the default strategy; defaults to "[]"
		 * @used-by PhpCsFixer
		 * @risky risky when PHPUnit methods are overridden or not accessible, or when project has PHPUnit incompatibilities.*
		 */
		// 'php_unit_test_case_static_method_calls' => true,
		/** php_unit_test_class_requires_covers
		 * Adds a default "@coversNothing" annotation to PHPUnit test classes that
		 * have no "@covers*" annotation.
		 * @used-by PhpCsFixer
		 */
		// 'php_unit_test_class_requires_covers' => true,
		/** phpdoc_add_missing_param_annotation
		 * PHPDoc should contain "@param" for all params.
		 * Configuration options:
		 * - "only_untyped" ("bool"): whether to add missing "@param" annotations for
		 *   untyped parameters only; defaults to "true"
		 * @used-by PhpCsFixer
		 */
		'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
		/** phpdoc_align
		 * All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
		 * Configuration options:
		 * - "align" ("'left'", "'vertical'"): align comments; defaults to "'vertical'"
		 * - "tags" (a subset of "['param', 'property', 'return', 'throws', 'type', 'var', 'method']"):
		 *   the tags that should be aligned; defaults to "['param', 'return', 'throws', 'type', 'var']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_align' => [
			'align' => 'left',
			'tags' => ['param', 'property', 'return', 'throws', 'type', 'var', 'method', 'version', 'since', 'author', 'package', 'subpackage']
		],
		/** phpdoc_annotation_without_dot
		 * PHPDoc annotation descriptions should not be a sentence.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_annotation_without_dot' => true,
		/** phpdoc_indent
		 * Docblocks should have the same indentation as the documented subject.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_indent' => true,
		/** phpdoc_inline_tag
		 * Fix PHPDoc inline tags, make "@inheritdoc" always inline.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_inline_tag' => true,
		/** phpdoc_no_access
		 * "@access" annotations should be omitted from PHPDoc.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'phpdoc_no_access' => true,
		/** phpdoc_no_alias_tag
		 * No alias PHPDoc tags should be used.
		 * Configuration options:
		 * - "replacements" ("array"): mapping between replaced annotations with new ones;
		 *   defaults to "['property-read' => 'property', 'property-write' => 'property', 'type' => 'var', 'link' => 'see']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_no_alias_tag' => true,
		/** phpdoc_no_empty_return
		 * "@return void" and "@return null" annotations should be omitted from PHPDoc.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'phpdoc_no_empty_return' => true,
		/** phpdoc_no_package
		 * "@package" and "@subpackage" annotations should be omitted from PHPDoc.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'phpdoc_no_package' => true,
		/** phpdoc_no_useless_inheritdoc
		 * Classy that does not inherit must not have "@inheritdoc" tags.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_no_useless_inheritdoc' => true,
		/** phpdoc_order
		 * Annotations in PHPDoc should be ordered so that "@param" annotations
		 * come first, then "@throws" annotations, then "@return" annotations.
		 * @used-by PhpCsFixer
		 */
		'phpdoc_order' => true,
		/** phpdoc_return_self_reference
		 * The type of "@return" annotations of methods returning a reference to itself must the configured one.
		 * Configuration options:
		 * - "replacements" ("array"): mapping between replaced return types with new
		 *   ones; defaults to "['this' => '$this', '@this' => '$this', '$self' =>
		 *   'self', '@self' => 'self', '$static' => 'static', '@static' =>
		 *   'static']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_return_self_reference' => true,
		/** phpdoc_scalar
		 * Scalar types should always be written in the same form. "int" not "integer", "bool" not "boolean", "float" not "real" or "double".
		 * Configuration options:
		 * - "types" (a subset of "['boolean', 'callback', 'double', 'integer', 'real', 'str']"): a map of types to fix;
		 *   defaults to "['boolean', 'double', 'integer', 'real', 'str']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_scalar' => ['types' => ['boolean', 'callback', 'double', 'integer', 'real', 'str']],
		/** phpdoc_separation
		 * Annotations in PHPDoc should be grouped together so that annotations of
		 * the same type immediately follow each other, and annotations of a
		 * different type are separated by a single blank line.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_separation' => true,
		/** phpdoc_single_line_var_spacing
		 * Single line "@var" PHPDoc should have proper spacing.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_single_line_var_spacing' => true,
		/** phpdoc_summary
		 * PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'phpdoc_summary' => true,
		/** phpdoc_to_comment
		 * Docblocks should only be used on structural elements.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'phpdoc_to_comment' => true,
		/** phpdoc_to_return_type
		 * EXPERIMENTAL: Takes "@return" annotation of non-mixed types and adjusts accordingly the function signature. Requires PHP >= 7.0.
		 * Configuration options:
		 * - "scalar_types" ("bool"): fix also scalar types; may have unexpected
		 *   behaviour due to PHP bad type coercion system; defaults to "true"
		 * @risky [1] This rule is EXPERIMENTAL and is not covered with backward compatibility promise.
		 * @risky [2] "@return" annotation is mandatory for the fixer to make changes, signatures of methods without it (no docblock, inheritdocs) will not be fixed.
		 * @risky [3] Manual actions are required if inherited signatures are not properly documented.
		 * @risky [4] "@inheritdocs" support is under construction.
		 */
		// 'phpdoc_to_return_type' => true,
		/** phpdoc_trim
		 * PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_trim' => true,
		/** phpdoc_trim_consecutive_blank_line_separation
		 * Removes extra blank lines after summary and after description in PHPDoc.
		 * @used-by PhpCsFixer
		 */
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		/** phpdoc_types
		 * The correct case must be used for standard PHP types in PHPDoc.
		 * Configuration options:
		 * - "groups" (a subset of "['simple', 'alias', 'meta']"): type groups to fix;
		 *   defaults to "['simple', 'alias', 'meta']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_types' => true,
		/** phpdoc_types_order
		 * Sorts PHPDoc types.
		 * Configuration options:
		 * - "null_adjustment" ("'always_first'", "'always_last'", "'none'"): forces the position of "null" (overrides "sort_algorithm"); defaults to "'always_first'"
		 * - "sort_algorithm" ("'alpha'", "'none'"): the sorting algorithm to apply; defaults to "'alpha'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
		/** phpdoc_var_annotation_correct_order
		 * "@var" and "@type" annotations must have type and name in the correct order.
		 * @used-by PhpCsFixer
		 */
		'phpdoc_var_annotation_correct_order' => true,
		/** phpdoc_var_without_name
		 * "@var" and "@type" annotations should not contain the variable name.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'phpdoc_var_without_name' => true,
		/** pow_to_exponentiation
		 * Converts "pow" to the "**" operator.
		 * @used-by PHP56Migration
		 * @used-by PHP70Migration
		 * @used-by PHP71Migration
		 * @risky risky when the function "pow" is overridden.*
		 */
		'pow_to_exponentiation' => true,
		/** pre_increment
		 * Pre incrementation/decrementation should be used if possible.
		 * DEPRECATED: use "increment_style" instead.
		 */
		// 'pre_increment' => true,
		/** protected_to_private
		 * Converts "protected" variables and methods to "private" where possible.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'protected_to_private' => true,
		/** psr0
		 * Classes must be in a path that matches their namespace, be at least one
		 * namespace deep and the class name should match the file name.
		 * @risky this fixer may change your class name, which will break the code that is depended on old name.*
		 * Configuration options:
		 * - "dir" ("string"): the directory where the project code is placed; defaults
		 *   to "''"
		 */
		// 'psr0' => true,
		/** psr4
		 * Class names should match the file name.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky this fixer may change your class name, which will break the code that is depended on old name.*
		 */
		// 'psr4' => true,
		/** random_api_migration
		 * Replaces "rand", "srand", "getrandmax" functions calls with their "mt_*" analogs.
		 * Configuration options:
		 * - "replacements" ("array"): mapping between replaced functions with the new
		 *   ones; defaults to "['getrandmax' => 'mt_getrandmax', 'rand' =>
		 *   'mt_rand', 'srand' => 'mt_srand']"
		 * @used-by PHP70Migration
		 * @used-by PHP71Migration
		 * @risky risky when the configured functions are overridden.*
		 */
		// 'random_api_migration' => true,
		/** return_assignment
		 * Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
		 * @used-by PhpCsFixer
		 */
		// 'return_assignment' => true,
		/** return_type_declaration
		 * There should be one or no space before colon, and one space after it in return type declarations, according to configuration.
		 * Configuration options:
		 * - "space_before" ("'none'", "'one'"): spacing to apply before colon; defaults to "'none'"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'return_type_declaration' => true,
		/** self_accessor
		 * Inside class or interface element "self" should be preferred to the class name itself.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when using dynamic calls like get_called_class() or late static binding.*
		 */
		// 'self_accessor' => true,
		/** semicolon_after_instruction
		 * Instructions must be terminated with a semicolon.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'semicolon_after_instruction' => true,
		/** set_type_to_cast
		 * Cast shall be used, not "settype".
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @risky risky when the "settype" function is overridden or when used as the 2nd or 3rd expression in a "for" loop .*
		 */
		// 'set_type_to_cast' => true,
		/** short_scalar_cast
		 * Cast "(boolean)" and "(integer)" should be written as "(bool)" and
		 * "(int)", "(double)" and "(real)" as "(float)", "(binary)" as "(string)".
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'short_scalar_cast' => true,
		/** silenced_deprecation_error
		 * Ensures deprecation notices are silenced. DEPRECATED: use "error_suppression" instead.
		 * @risky silencing of deprecation errors might cause changes to code behaviour.*
		 */
		// 'silenced_deprecation_error' => true,
		/** simplified_null_return
		 * A return statement wishing to return "void" should not return "null".
		 */
		// 'simplified_null_return' => true,
		/** single_blank_line_at_eof
		 * A PHP file without end tag must always end with a single empty line feed.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'single_blank_line_at_eof' => true,
		/** single_blank_line_before_namespace
		 * There should be exactly one blank line before a namespace declaration.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'single_blank_line_before_namespace' => true,
		/** single_class_element_per_statement
		 * There MUST NOT be more than one property or constant declared per statement.
		 * Configuration options:
		 * - "elements" (a subset of "['const', 'property']"): list of strings which
		 *   element should be modified; defaults to "['const', 'property']"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'single_class_element_per_statement' => true,
		/** single_import_per_statement
		 * There MUST be one use keyword per declaration.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'single_import_per_statement' => true,
		/** single_line_after_imports
		 * Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'single_line_after_imports' => true,
		/** single_line_comment_style
		 * Single-line comments and multi-line comments with only one line of
		 * actual content should use the "//" syntax.
		 * Configuration options:
		 * - "comment_types" (a subset of "['asterisk', 'hash']"): list of comment types
		 *   to fix; defaults to "['asterisk', 'hash']"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'single_line_comment_style' => ['comment_types' => ['asterisk', 'hash']],
		/** single_quote
		 * Convert double quotes to single quotes for simple strings.
		 * Configuration options:
		 * - "strings_containing_single_quote_chars" ("bool"): whether to fix
		 *   double-quoted strings that contains single-quotes; defaults to "false"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'single_quote' => ['strings_containing_single_quote_chars' => false],
		/** space_after_semicolon
		 * Fix whitespace after a semicolon.
		 * Configuration options:
		 * - "remove_in_empty_for_expressions" ("bool"): whether spaces should be removed
		 *   for empty "for" expressions; defaults to "false"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'space_after_semicolon' => true,
		/** standardize_increment
		 * Increment and decrement operators should be used if possible.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'standardize_increment' => true,
		/** standardize_not_equals
		 * Replace all "<>" with "!=".
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'standardize_not_equals' => true,
		/** static_lambda
		 * Lambdas not (indirect) referencing "$this" must be declared "static".
		 * @risky risky when using "->bindTo" on lambdas without referencing to "$this".*
		 */
		// 'static_lambda' => true,
		/** strict_comparison
		 * Comparisons should be strict.
		 * @used-by PhpCsFixer
		 * @risky changing comparisons to strict might change code behavior.*
		 */
		// 'strict_comparison' => true,
		/** strict_param
		 * Functions should be used with "$strict" param set to "true".
		 * @used-by PhpCsFixer
		 * @risky risky when the fixed function is overridden or if the code relies on non-strict usage.*
		 */
		// 'strict_param' => true,
		/** string_line_ending
		 * All multi-line strings must use correct line ending.
		 * @used-by PhpCsFixer
		 * @risky changing the line endings of multi-line strings might affect string comparisons and outputs.*
		 */
		// 'string_line_ending' => true,
		/** switch_case_semicolon_to_colon
		 * A case should be followed by a colon and not a semicolon.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'switch_case_semicolon_to_colon' => true,
		/** switch_case_space
		 * Removes extra spaces between colon and case value.
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'switch_case_space' => true,
		/** ternary_operator_spaces
		 * Standardize spaces around ternary operator.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'ternary_operator_spaces' => true,
		/** ternary_to_null_coalescing
		 * Use "null" coalescing operator "??" where possible. Requires PHP >= 7.0.
		 * @used-by PHP70Migration
		 * @used-by PHP71Migration
		 */
		'ternary_to_null_coalescing' => true,
		/** trailing_comma_in_multiline_array
		 * PHP multi-line arrays should have a trailing comma.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'trailing_comma_in_multiline_array' => true,
		/** trim_array_spaces
		 * Arrays should be formatted like function/method arguments, without leading or trailing single line space.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'trim_array_spaces' => true,
		/** unary_operator_spaces
		 * Unary operators should be placed adjacent to their operands.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'unary_operator_spaces' => true,
		/** visibility_required
		 * Visibility MUST be declared on all properties and methods; "abstract"
		 * and "final" MUST be declared before the visibility; "static" MUST be
		 * declared after the visibility.
		 * Configuration options:
		 * - "elements" (a subset of "['property', 'method', 'const']"): the structural
		 *   elements to fix (PHP >= 7.1 required for "const"); defaults to
		 *   "['property', 'method']"
		 * @used-by PSR2
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 * @used-by PHP71Migration
		 */
		'visibility_required' => ['elements' => ['property', 'method', 'const']],
		/** void_return
		 * Add void return type to functions with missing or empty return
		 * statements, but priority is given to "@return" annotations. Requires
		 * PHP >= 7.1.
		 * @used-by PHP71Migration
		 * @risky modifies the signature of functions.*
		 */
		// 'void_return' => true,
		/** whitespace_after_comma_in_array
		 * In array declaration, there MUST be a whitespace after each comma.
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		'whitespace_after_comma_in_array' => true,
		/** yoda_style
		 * Write conditions in Yoda style ("true"), non-Yoda style ("false") or
		 * ignore those conditions ("null") based on configuration.
		 * Configuration options:
		 * - "always_move_variable" ("bool"): whether variables should always be on non
		 *   assignable side when applying Yoda style; defaults to "false"
		 * - "equal" ("bool", "null"): style for equal ("==", "!=") statements; defaults to
		 *   "true"
		 * - "identical" ("bool", "null"): style for identical ("===", "!==") statements;
		 *   defaults to "true"
		 * - "less_and_greater" ("bool", "null"): style for less and greater than ("<",
		 *   "<=", ">", ">=") statements; defaults to "null"
		 * @used-by Symfony
		 * @used-by PhpCsFixer
		 */
		// 'yoda_style' => true,
	])
	->setRiskyAllowed(true)
	->setIndent("\t")
	->setLineEnding("\n");
