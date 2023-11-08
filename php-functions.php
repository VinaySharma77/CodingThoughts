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
    <h1 class="head">PHP Functions</h1>
<p class="para">The real power of PHP comes from its functions.
PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.</p>
<h2>PHP Built-in Functions</h2>
<p class="para">PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.</p>
<h2>PHP User Defined Functions</h2>
<p class="para">Besides the built-in PHP functions, it is possible to create your own functions.<br>
A function is a block of statements that can be used repeatedly in a program.<br>
A function will not execute automatically when a page loads.<br>
A function will be executed by a call to the function.</p>
<h2>Create a User Defined Function in PHP</h2>
<p class="para">A user-defined function declaration starts with the word function:<br>
Syntax<br>
function functionName() {<br>
  code to be executed;<br>
}<br>
Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.<br>
Tip: Give the function a name that reflects what the function does!<br>
In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code, and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name followed by brackets ():</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
function writeMsg() {<br>
  echo "Hello world!";<br>
}<br>
writeMsg(); // call the function<br>
?&gt;</p>
<h2>PHP Function Arguments</h2>
<p class="para">Information can be passed to functions through arguments. An argument is just like a variable.
Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
function familyName($fname) {<br>
  echo "$fname Refsnes.&lt;br&gt;";<br>
}<br>
familyName("Jani");<br>
familyName("Hege");<br>
familyName("Stale");<br>
familyName("Kai Jim");<br>
familyName("Borge");<br>
?&gt;</p>
<p class="para">The following example has a function with two arguments ($fname and $year):</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
function familyName($fname, $year) {<br>
  echo "$fname Refsnes. Born in $year &lt;br&gt;";<br>
}<br>
familyName("Hege", "1975");<br>
familyName("Stale", "1978");<br>
familyName("Kai Jim", "1983");<br>
?&gt;</p>
<h2>PHP is a Loosely Typed Language</h2>
<p class="para">In the example above, notice that we did not have to tell PHP which data type the variable is.
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
In the following example we try to send both a number and a string to the function without using strict:</p>
<h2>PHP Default Argument Value</h2>
<p class="para">The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:</p>
<h2>Example</h2>
<p class="para">&lt;?php declare(strict_types=1); // strict requirement<br>
function setHeight(int $minheight = 50) {<br>
  echo "The height is : $minheight &lt;br&gt;";<br>
}<br>
setHeight(350);<br>
setHeight(); // will use the default value of 50<br>
setHeight(135);<br>
setHeight(80);<br>
?&gt;</p>
<h2>PHP Functions - Returning values</h2>
<p class="para">To let a function return a value, use the return statement:</p>
<h2>Example</h2>
<p class="para">&lt;?php declare(strict_types=1); // strict requirement<br>
function sum(int $x, int $y) {<br>
  $z = $x + $y;<br>
  return $z;<br>
}<br>
echo "7 + 13 = " . sum(7, 13) . "lt;br&gt;";<br>
echo "5 + 10 = " . sum(5, 10) . "lt;br&gt;";<br>
echo "2 + 4 = " . sum(2, 4);<br>
?&gt;</p>
<a href="php-arrays.php" class="next">Next Topic</a>
</body>
</html>
