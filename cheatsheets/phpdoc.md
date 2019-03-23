# PHPDoc Cheatsheet

## Tags

| Code | Status | Description |
|---|:---:|---|
| `@api` | | The @api tag is used to declare Structural Elements as being suitable for consumption by third parties. |
| `@author [name] [<email address>]` || The @author tag is used to document the author of Structural Elements.
| `@category [description]` | <span style="color:#fff;background-color:#0ff;font-weight:bold;padding:4px 10px;">Deprecated</span> | The @category tag is used to organize groups of packages together. |
| `@copyright [description]` || The @copyright tag is used to document the copyright information for Structural elements. |
| `@deprecated [<version>] [<description>]` | | The @deprecated tag is used to indicate which Structural elements are deprecated and are to be removed in a future version. |
| `@example [location] [<start-line> [<number-of-lines>] ] [<description>]`<br/>`{@example [location] [<start-line> [<number-of-lines>] ] [<description>]}` | <span style="background-color:#fa0;font-weight:bold;padding:4px 10px;">Experimental</span> | The @example tag shows the code of a specified example file, or optionally, just a portion of it. |
| `@filesource` || The @filesource tag is used to tell phpDocumentor to include the source of the current file in the parsing results.|
| `@global [Type] [name] [description]` || The @global tag is used to inform phpDocumentor of a global variable _or_ its usage.|
| `@ignore [<description>]` ||The @ignore tag is used to tell phpDocumentor that Structural Elements are not to be processed by phpDocumentor.|
| `{@inheritdoc}` ||The @inheritdoc inline tag is used to fetch the documentation from the inherited parent.|
| `@internal [description]`<br/>`{@internal [description]}` ||The @internal tag is used to denote that associated Structural Elements are elements internal to this application or library. It may also be used inside a long description to insert a piece of text that is only applicable for the developers of this software.|
| `@license [<url>] [name]` ||The @license tag is used to indicate which license is applicable for the associated Structural Elements.|
| `@link [URI] [<description>]`<br/>`{@link [URI] [<description>]}` ||The @link tag indicates a custom relation between associated Structural Elements and a website, which is identified by an absolute URI.|
| `@method [return type] [name]([[type] [parameter]<, …>]) [<description>]` ||The @method allows a class to know which ‘magic’ methods are callable.|
| `@package [level 1]\[level 2]\[etc.]` ||The @package tag is used to categorize Structural Elements into logical subdivisions.|
| `@param [Type] [name] [<description>]` ||The @param tag is used to document a single argument of a function or method.|
| `@property [Type] [name] [<description>]` ||The @property tag allows a class to know which ‘magic’ properties are present: the __get() and __set() magic methods and allows for specific names.|
| `@property-read [Type] [name] [<description>]` ||The @property-read tag allows a class to know which ‘magic’ properties are present that are read-only: a class contains the __get() magic method and allows for specific names that are not covered in a __set() magic method.|
| `@property-write [Type] [name] [<description>]` ||The @property-write tag allows a class to know which ‘magic’ properties are present that are write-only: a class contains the __set() magic method and allows for specific names that are not covered in a __get() magic method.|
| `@return [Type] [<description>]` ||The @return tag is used to document the return value of functions or methods.|
| `@see [URI | FQSEN] [<description>]`<br/>`{@see [URI | FQSEN] [<description>]}` ||The @see tag indicates a reference from the associated Structural Elements to a website or other Structural Elements.|
| `@since [version] [<description>]` |<span style="background-color:#fa0;font-weight:bold;padding:4px 10px;">Experimental</span>|The @since tag indicates at which version did the associated Structural Elements became available.|
| `@source [<start-line> [<number-of-lines>] ] [<description>]` |<span style="background-color:#fa0;font-weight:bold;padding:4px 10px;">Experimental</span>|The @source tag shows the source code of Structural Elements.|
| `@subpackage [name]` |<span style="color:#fff;background-color:#0ff;font-weight:bold;padding:4px 10px;">Deprecated</span>|The @subpackage tag is used to categorize Structural Elements into logical subdivisions.|
| `@throws [Type] [<description>]` ||The @throws tag is used to indicate whether Structural Elements could throw a specific type of exception.|
| `@todo [description]` ||The @todo tag is used to indicate whether any development activities should still be executed on associated Structural Elements.|
| `@uses [FQSEN] [<description>]`<br/>`@used-by [FQSEN] [<description>]` ||The @uses tag indicates a reference to (and from) a single associated Structural Elements.|
| `@var [“Type”] [$element_name] [<description>]` ||You may use the @var tag to document the “Type” of properties, sometimes called class variables.|
| `@version [<vector>] [<description>]` ||The @version tag indicates the current version of Structural Elements.|

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

        /** @var Baz $obj Sometimes your IDE is confused about a var and set its type to 'mixed', you can set it straight like this */
        $obj = null;

        try {
            // do something...
            $array = $this->baz();
        } catch ($ex) {
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