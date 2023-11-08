<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="head">PHP Numbers</h1>
    <p class="para">In this chapter we will look in depth into Integers, Floats, and Number Strings.</p>
    <h2>PHP Numbers</h2>
    <p class="para">One thing to notice about PHP is that it provides automatic data type conversion.
So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.
This automatic conversion can sometimes break your code.
</p>
<h2>PHP Integers</h2>
<p class="para">2, 256, -256, 10358, -179567 are all integers.<br>
An integer is a number without any decimal part.<br>
An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.<br>
Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).<br>
Here are some rules for integers:<br>
An integer must have at least one digit<br>
An integer must NOT have a decimal point<br>
An integer can be either positive or negative<br>
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)<br>
PHP has the following predefined constants for integers:<br>
PHP_INT_MAX - The largest integer supported<br>
PHP_INT_MIN - The smallest integer supported<br>
PHP_INT_SIZE -  The size of an integer in bytes<br>
PHP has the following functions to check if the type of a variable is integer:<br>
is_int()<br>
is_integer() - alias of is_int()<br>
is_long() - alias of is_int()</p>
<h2>Example</h2>
<p class="para">Check if the type of a variable is integer:<br>
&lt;?php<br>
$x = 5985;<br>
var_dump(is_int($x));<br>
$x = 59.85;<br>
var_dump(is_int($x));<br>
?&gt;</p>
<h2>PHP Floats</h2>
<p class="para">A float is a number with a decimal point or a number in exponential form.<br>
2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.<br>
The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.<br>
PHP has the following predefined constants for floats (from PHP 7.2):<br>
PHP_FLOAT_MAX - The largest representable floating point number<br>
PHP_FLOAT_MIN - The smallest representable positive floating point number<br>
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss<br>
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0<br>
PHP has the following functions to check if the type of a variable is float:<br>
is_float()<br>
is_double() - alias of is_float()</p>
<h2>Example</h2>
<p class="para">Check if the type of a variable is float:<br>
&lt;?php<br>
$x = 10.365;<br>
var_dump(is_float($x));<br>
?&gt;</p>
<h2>PHP Infinity</h2>
<p class="para">A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.<br>
PHP has the following functions to check if a numeric value is finite or infinite:<br>
is_finite()<br>
is_infinite()<br>
However, the PHP var_dump() function returns the data type and value:</p>
<h2>Example</h2>
<p class="para">Check if a numeric value is finite or infinite:<br>
&lt;?php<br>
$x = 1.9e411;<br>
var_dump($x);<br>
?&gt;
</p>
<h2>PHP NaN</h2>
<p class="para">NaN stands for Not a Number.<br>
NaN is used for impossible mathematical operations.<br>
PHP has the following functions to check if a value is not a number:<br>
is_nan()<br>
However, the PHP var_dump() function returns the data type and value:</p>
<h2>Example</h2>
<p class="para">Invalid calculation will return a NaN value:<br>
&lt;?php<br>
$x = acos(8);<br>
var_dump($x);<br>
?&gt;</p>
<h2>PHP Numerical Strings</h2>
<p class="para">The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.</p>
<h2>Example</h2>
<p class="para">Check if the variable is numeric:<br>
&lt;?php<br>
$x = 5985;<br>
var_dump(is_numeric($x));<br>
$x = "5985";<br>
var_dump(is_numeric($x));<br>
$x = "59.85" + 100;<br>
var_dump(is_numeric($x));<br>
$x = "Hello";<br>
var_dump(is_numeric($x));<br>
?&gt;</p>
<p class="para">Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.</p>
<h2>PHP Casting Strings and Floats to Integers</h2>
<p class="para">Sometimes you need to cast a numerical value into another data type.<br>
The (int), (integer), or intval() function are often used to convert a value to an integer.</p>
    <h2>Example</h2>
    <p class="para">Cast float and string to integer:<br>
    &lt;?php<br>
// Cast float to int<br>
$x = 23465.768;<br>
$int_cast = (int)$x;<br>
echo $int_cast;<br>
echo "&lt;br&gt;";<br>
// Cast string to int<br>
$x = "23465.768";<br>
$int_cast = (int)$x;<br>
echo $int_cast;<br>
?&gt;</p>
<a href="php-constant.php" class="next">Next Topic</a>
</body>
</html>
