# PHPDoc Cheatsheet

## Tags

* `@api`<br/>The @api tag is used to declare Structural Elements as being suitable for consumption by third parties.
* `@author [name] [<email address>]`<br/>The @author tag is used to document the author of Structural Elements.
* **DEPRECATED** `@category [description]`<br/>The @category tag is used to organize groups of packages together.
* `@copyright [description]`<br/>The @copyright tag is used to document the copyright information for Structural elements.
* `@deprecated [<version>] [<description>]`<br/>The @deprecated tag is used to indicate which Structural elements are deprecated and are to be removed in a future version.
* **EXPERIMENTAL** `@example [location] [<start-line> [<number-of-lines>] ] [<description>]` or `{@example [location] [<start-line> [<number-of-lines>] ] [<description>]}`<br/>The @example tag shows the code of a specified example file, or optionally, just a portion of it.
* `@filesource`<br/>The @filesource tag is used to tell phpDocumentor to include the source of the current file in the parsing results.
* `@global [Type] [name] [description]`<br/>The @global tag is used to inform phpDocumentor of a global variable _or_ its usage.
* `@ignore [<description>]`<br/>The @ignore tag is used to tell phpDocumentor that Structural Elements are not to be processed by phpDocumentor.
* `{@inheritdoc}`<br/>The @inheritdoc inline tag is used to fetch the documentation from the inherited parent.
* `@internal [description]` or `{@internal [description]}`<br/>The @internal tag is used to denote that associated Structural Elements are elements internal to this application or library. It may also be used inside a long description to insert a piece of text that is only applicable for the developers of this software.
* `@license [<url>] [name]`<br/>The @license tag is used to indicate which license is applicable for the associated Structural Elements.
* `@link [URI] [<description>]` or `{@link [URI] [<description>]}`<br/>The @link tag indicates a custom relation between associated Structural Elements and a website, which is identified by an absolute URI.
* `@method [return type] [name]([[type] [parameter]<, …>]) [<description>]`<br/>The @method allows a class to know which ‘magic’ methods are callable.
* `@package [level 1]\[level 2]\[etc.]`<br/>The @package tag is used to categorize Structural Elements into logical subdivisions.
* `@param [Type] [name] [<description>]`<br/>The @param tag is used to document a single argument of a function or method.
* `@property [Type] [name] [<description>]`<br/>The @property tag allows a class to know which ‘magic’ properties are present: the __get() and __set() magic methods and allows for specific names.
* `@property-read [Type] [name] [<description>]`<br/>The @property-read tag allows a class to know which ‘magic’ properties are present that are read-only: a class contains the __get() magic method and allows for specific names that are not covered in a __set() magic method.
* `@property-write [Type] [name] [<description>]`<br/>The @property-write tag allows a class to know which ‘magic’ properties are present that are write-only: a class contains the __set() magic method and allows for specific names that are not covered in a __get() magic method.
* `@return [Type] [<description>]`<br/>The @return tag is used to document the return value of functions or methods.
* `@see [URI \| FQSEN] [<description>]`<br/>`{@see [URI \| FQSEN] [<description>]}`<br/>The @see tag indicates a reference from the associated Structural Elements to a website or other Structural Elements.
* **EXPERIMENTAL** `@since [version] [<description>]`<br/>The @since tag indicates at which version did the associated Structural Elements became available.
* **EXPERIMENTAL** `@source [<start-line> [<number-of-lines>] ] [<description>]`<br/>The @source tag shows the source code of Structural Elements.
* **DEPRECATED** `@subpackage [name]`<br/>The @subpackage tag is used to categorize Structural Elements into logical subdivisions.
* `@throws [Type] [<description>]`<br/>The @throws tag is used to indicate whether Structural Elements could throw a specific type of exception.
* `@todo [description]`<br/>The @todo tag is used to indicate whether any development activities should still be executed on associated Structural Elements.
* `@uses [FQSEN] [<description>]` or `@used-by [FQSEN] [<description>]`<br/>The @uses tag indicates a reference to (and from) a single associated Structural Elements.
* `@var [“Type”] [$element_name] [<description>]`<br/>You may use the @var tag to document the “Type” of properties, sometimes called class variables.
* `@version [<vector>] [<description>]`<br/>The @version tag indicates the current version of Structural Elements.

> **FQS(E)N**: Fully Qualified Structural (Element) Name

**Type**: It could be:

* a standard PHP type (`int`, `bool`, `float`, `object`, `array`, `callable`, `mixed`, ...),
* a FQSN,
* an array of the above by appending `[]`,
* or even a specific value (`null`, `true`, `false`, `-1`, ...)

You can stipulate multiple Type by separating them with a pipe `|`

## Exemples

```php
/**
 * Class description
 *
 * @property        int      $magicInt            MagicInt description
 * @property-read   string   $magicString         MagicString read-only description
 * @property-write  bool     $magicBool           MagicBool write-only description
 *
 * @method          Baz      magicBaz(int $id)    MagicBaz description
 *
 * @version    1.3.6
 * @since      1.0.0
 * @package    MyPackage/MyGroup
 * @author     Me <me@company.com>
 *
 * @todo Remove deprecated functions
 */
class Foo inherits Base
{
    /**
     * Function description
     *
     * @global   Bar           $bar          A global object
     *
     * @uses     Foo::baz()                  This function uses the baz() function
     *
     * @param    int|string    $some         Some description
     * @param    bool          $parameter    Parameter description
     *
     * @throws   MyException                 When something horrible happened!
     *
     * @return   Baz[]|bool                  Returns an array of Baz or a boolean
     *
     * @version  1.3.6
     * @since    1.3.0
     */
    public function foo($some, $parameter) {
        global $bar;

        // Sometimes your IDE is confused about a var and set its type to 'mixed',
        // you can set it straight like this
        /** @var Baz $obj */
        $obj = null;

        try {
            // do something...
            $array = $this->baz();
        } catch (Exception $ex) {
            throw new MyException('Something horrible happened!');
        }

        // something less horrible happened
        if ($error) {
            return false;
        }
        return $array;
    }

    /**
     * {@inheritdoc}
     */
    public function baz($arg)
    {
        return parent::foo2($arg + 1);
    }

    /**
     * Old deprecated function description
     *
     * @deprecated   1.3.0    Use Foo::foo() instead
     * @version      1.2.5
     * @since        1.0.0
     */
    public function old()
    {
        // ...
    }
}
```