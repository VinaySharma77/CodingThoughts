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
    <h1 class="head">PHP Constants</h1>
    <p class="para">Constants are like variables, except that once they are defined they cannot be changed or undefined.</p>
    <h2>PHP Constants</h2>
    <p class="para">A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Note: Unlike variables, constants are automatically global across the entire script.</p>
<h2>Create a PHP Constant</h2>
<p class="para">To create a constant, use the define() function.<br>
Syntax<br>
define(name, value, case-insensitive)<br>
Parameters:<br>
name: Specifies the name of the constant<br>
value: Specifies the value of the constant<br>
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.</p>
<h2>Example</h2>
<p class="para">Create a constant with a case-sensitive name:<br>
&lt;?php<br>
define("GREETING", "Welcome to W3Schools.com!");<br>
echo GREETING;<br>
?&gt;</p>
<h2>Example</h2>
<p class="para">Create a constant with a case-insensitive name:<br>
&lt;?php<br>
define("GREETING", "Welcome to W3Schools.com!", true);<br>
echo greeting;<br>
?&gt;</p>
<h2>PHP const Keyword</h2>
<p class="para">You can also create a constant by using the const keyword.</p>
<h2>Example</h2>
<p class="para">Create a constant with the const keyword:<br>
&lt;?php<br>
const MYCAR = "Volvo";<br>
echo MYCAR;<br>
?&gt;</p>
<p class="para">const vs. define()<br>
const are always case-sensitive<br>
define() has has a case-insensitive option.<br>
const cannot be created inside another block scope, like inside a function or inside an if statement.<br>
define can be created inside another block scope.</p>
<h2>PHP Constant Arrays</h2>
<p class="para">In PHP7, you can create an Array constant using the define() function.</p>
<h2>Example</h2>
<p class="para">Create an Array constant:<br>
&lt;?php<br>
define("cars", [<br>
  "Alfa Romeo",<br>
  "BMW",<br>
  "Toyota"<br>
]);<br>
echo cars[0];<br>
?&gt;</p>
<h2>Constants are Global</h2>
<p class="para">Constants are automatically global and can be used across the entire script.</p>
<h2>Example</h2>
<p class="para">This example uses a constant inside a function, even if it is defined outside the function:<br>
&lt;?php<br>
define("GREETING", "Welcome to W3Schools.com!");<br>
function myTest() {<br>
  echo GREETING;<br>
}<br>
myTest();<br>
?&gt;</p>
<a href="php-math.php" class="next">Next Topic</a>
</body>
</html>
