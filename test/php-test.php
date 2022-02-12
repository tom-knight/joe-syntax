<?php

namespace App\Http\Controllers;

// TODO comments
// BUG
// FIXME
// HACK
// NOTE
// TODO
// XXX
// DEBUG
// SOMETHING_ELSE


// Variable definitions
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // outputs "Bob, Joe"

$4site = 'not yet';     // invalid; starts with a number
$_4site = 'not yet';    // valid; starts with an underscore

//  joe doesn't have extended ascii characters, so you need to set the file encoding to something like iso-8859-1 to see this correctly.

$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.
$t€ÿyte = 'mansikka';    // valid; '€' is (Extended) ASCII 128 (\x80) and 'ÿ' is (Extended) ASCII 255 (\xff).


// Variable variables

$a = 'hello';
$$a = 'world';
echo "$a ${$a}";
echo "$a $hello";

// You can even add more Dollar Signs

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

$a; // Returns Hello
$$a; // Returns World
$$$a; // Returns Foo
$$$$a; // Returns Bar
$$$$$a; // Returns a

$$$$$$a; // Returns Hello
$$$$$$$a; // Returns World

// ... and so on ... //

// Variable properties

class foo {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";
echo $foo->{$baz[1]} . "\n";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->{$arr[1]} . "\n";

// Predefined variables

$GLOBALS // - References all variables available in global scope
$_SERVER // - Server and execution environment information
$_GET // - HTTP GET variables
$_POST // - HTTP POST variables
$_FILES // - HTTP File Upload variables
$_REQUEST // - HTTP Request variables
$_SESSION // - Session variables
$_ENV // - Environment variables
$_COOKIE // - HTTP Cookies
$php_errormsg // - The previous error message
$http_response_header // - HTTP response headers
$argc // - The number of arguments passed to script
$argv // - Array of arguments passed to script

// Predefined constants

echo PHP_OS_FAMILY;

$yes = true;
$no = false;
$nope = null;

// Types

// Integer literals

$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)
$a = 012_3; // octal number (as of PHP 7.4.0)
$a = 0O12_3; // octal number (as of PHP 7.4.0)
$a = 0X1_A; // hexadecimal number (as of PHP 7.4.0)
$a = 0B1111_1111; // binary number (as of PHP 7.4.0)

// bad numbers

$a = 12a34; // bad decimal number - has letter
$a = 1_23a4_567; // bad decimal number - has letter

$a = 01a23; // bad octal number - has letter
$a = 0o1a23; // bad octal number - has letter
$a = 0o183; // bad octal number - has number > 7
$a = 0183; // bad octal number - has number > 7
$a = 0o_123; // bad octal number - has underscore in first post letter postition
$a = 0_183; // bad octal number - has underscore in first post letter postition

$a = 0x1G; // bad hexadecimal number - Contains char > F
$a = 0x_1A; // bad hexadecimal number - has underscore in first post letter postition

$a = 0b11121111; // bad binary number - has number > 1
$a = 0b_11111111; // bad binary number - has underscore in first post letter postition


$a = 1o123; // bad octal number - doesn't start with 0
$a = 1x1A; // bad hexadecimal number - doesn't start with 0
$a = 1b11111111; // bad binary number - doesn't start with 0

/*
 Formally, the structure for int literals is as of PHP 7.4.0 (previously, underscores have not been allowed):

decimal     : [1-9][0-9]*(_[0-9]+)*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*

octal       : 0[oO]?[0-7]+(_[0-7]+)*

binary      : 0[bB][01]+(_[01]+)*

integer     : decimal
            | hexadecimal
            | octal
            | binary
*/

// Floating point numbers

$a = 1.234;
$b = 1.2e3;
$b = 1.2e-3;
$b = 1.2e+3;
$c = 7E10;
$c = 7E-10;
$c = 7E+10;
$d = 1_234.567; // as of PHP 7.4.0

// Bad floats

$a = 1.2a34; // has non 'e' letter
$b = 1.2e3a08; // has letter in exponent part
$b = 1.2e_3a08; // has underscore straight after 'e'


/*
 Formally as of PHP 7.4.0 (previously, underscores have not been allowed):

LNUM          [0-9]+(_[0-9]+)*
DNUM          ([0-9]*(_[0-9]+)*[\.]{LNUM}) | ({LNUM}[\.][0-9]*(_[0-9]+)*)
EXPONENT_DNUM (({LNUM} | {DNUM}) [eE][+-]? {LNUM})
*/

// Strings

// Single-quoted

echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';

// only valid escapes in single quotes are \' and \\
echo 'single\'quote';
echo 'back\\slash';

// These escape sequences shouldn't be interpreted

echo 'linefeed\n';
echo 'carriage return\r';
echo 'horizontal\ttab';
echo 'vertical\vtab';
echo 'escape\efrom here';
echo 'form\ffeed';
echo '\$dollar sign';
echo 'double\"quote';
echo 'octal \101';
echo 'hex \x0FA';
echo 'Unicode \u{C4}';


// Double-quoted

/*
If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:
Escaped characters Sequence 	Meaning
\n 	linefeed (LF or 0x0A (10) in ASCII)
\r 	carriage return (CR or 0x0D (13) in ASCII)
\t 	horizontal tab (HT or 0x09 (9) in ASCII)
\v 	vertical tab (VT or 0x0B (11) in ASCII)
\e 	escape (ESC or 0x1B (27) in ASCII)
\f 	form feed (FF or 0x0C (12) in ASCII)
\\ 	backslash
\$ 	dollar sign
\" 	double-quote
\[0-7]{1,3} 	the sequence of characters matching the regular expression is a character in octal notation, which silently overflows to fit in a byte (e.g. "\400" === "\000")
\x[0-9A-Fa-f]{1,2} 	the sequence of characters matching the regular expression is a character in hexadecimal notation
\u{[0-9A-Fa-f]+} 	the sequence of characters matching the regular expression is a Unicode codepoint, which will be output to the string as that codepoint's UTF-8 representation
*/

echo "linefeed\n";
echo "carriage return\r";
echo "horizontal\ttab";
echo "vertical\vtab";
echo "escape\efrom here";
echo "form\ffeed";
echo "back\\slash";
echo "\$dollar sign";
echo "double\"quote";
echo "octal \101";
echo "hex \x0FA";
echo "Unicode \u{C4}";

// bad escape - will output literally

echo "bad\sescape";

// Heredoc

// no indentation
echo <<<END
      a
     b
    c
\n
END;

// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;


// All the following code do not work.

// different indentation for body (spaces) ending marker (tabs)
{
    echo <<<END
     a
        END;
}

// mixing spaces and tabs in body
{
    echo <<<END
        a
     END;
}

// mixing spaces and tabs in ending marker
{
    echo <<<END
          a
         END;
}

// Closing identifier must not be indented further than any lines of the body
echo <<<END
  a
 b
c
   END;

// Continuing an expression after a closing identifier

$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);

// Heredoc string quoting example

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

// Heredoc in arguments example

var_dump(array(<<<EOD
foobar!
EOD
));

// Using Heredoc to initialize static values

// Static variables
function foo()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
}

// Class properties/constants
class foo
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}

// Using double quotes in Heredoc

echo <<<"FOOBAR"
Hello World!
FOOBAR;

// Nowdoc

//  Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to a heredoc, but no parsing is done inside a nowdoc. The construct is ideal for embedding PHP code or other large blocks of text without the need for escaping. It shares some features in common with the SGML <![CDATA[ ]]> construct, in that it declares a block of text which is not for parsing.

// A nowdoc is identified with the same <<< sequence used for heredocs, but the identifier which follows is enclosed in single quotes, e.g. <<<'EOT'. All the rules for heredoc identifiers also apply to nowdoc identifiers, especially those regarding the appearance of the closing identifier.

echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;

// Nowdoc string quoting example with variables

class foo
{
    public $foo;
    public $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should not print a capital 'A': \x41
EOT;

// Static data example

class foo {
    public $bar = <<<'EOT'
bar
EOT;
}

// Variable parsing - in double quotes or heredocs

$juice = "apple";

echo "He drank some $juice juice.".PHP_EOL;
// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
echo "He drank some juice made of $juices.";
// Valid. Explicitly specify the end of the variable name by enclosing it in braces:
echo "He drank some juice made of ${juice}s.";

// Simple syntax

$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
echo "$people->john then said hello to $people->jane.".PHP_EOL;
echo "$people->john's wife greeted $people->robert.".PHP_EOL;
echo "$people->robert greeted the two $people->smiths."; // Won't work

// Negative numeric indices

$string = 'string';
echo "The character at index -2 is $string[-2].", PHP_EOL;
$string[-3] = 'o';
echo "Changing the character at index -3 to o gives $string.", PHP_EOL;

// Complex (curly) syntax

// Show all errors
error_reporting(E_ALL);

$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}";

// Works, outputs: This is fantastic
echo "This is {$great}";

// Works
echo "This square is {$square->width}00 centimeters broad.";


// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}";


// Works
echo "This works: {$arr[4][3]}";

// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.
echo "This is wrong: {$arr[foo][3]}";

// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}";

// Works.
echo "This works: " . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $name: {${$name}}";

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";

// Won't work, outputs: C:\folder\{fantastic}.txt
echo "C:\folder\{$great}.txt"
// Works, outputs: C:\folder\fantastic.txt
echo "C:\\folder\\{$great}.txt"

// access class properties

class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";

// Show all errors.
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";

// Some string examples

// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];

// Get the third character of a string
$third = $str[2];

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];

// Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';

// Example of Illegal String Offsets

$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));

var_dump($str['1.0']);
var_dump(isset($str['1.0']));

var_dump($str['x']);
var_dump(isset($str['x']));

var_dump($str['1x']);
var_dump(isset($str['1x']));





// PHP 7+ code - Group use declarations
use some\namespace\{ClassA, ClassB, ClassC as C};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};

