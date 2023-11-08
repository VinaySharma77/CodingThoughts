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
    <h1 class="head">PHP Variables</h1>
    <p class="para">Variables are "containers" for storing information.</p>
    <h2>Variable Declaration</h2>
    <p class="para">In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>
<h2>Example</h2>
    <p class="para">&lt;?php<br>
$txt = "Hello world!";<br>
$x = 5;<br>
$y = 10.5;<br>
?&gt;</p>
<p class="para">After the execution of the statements above, the variable $txt will hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.
Note: When you assign a text value to a variable, put quotes around the value.
Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
Think of variables as containers for storing data.</p>
<h2>PHP Variables</h2>
<p class="para">A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).<br>
Rules for PHP variables:<br>
A variable starts with the $ sign, followed by the name of the variable<br>
A variable name must start with a letter or the underscore character<br>
A variable name cannot start with a number<br>
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )<br>
Variable names are case-sensitive ($age and $AGE are two different variables)<br>
Remember that PHP variable names are case-sensitive!</p>
<h2>Output Variables</h2>
<p class="para">The PHP echo statement is often used to output data to the screen.
The following example will show how to output text and a variable:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$txt = "CodingThoughts.com";<br>
echo "I love $txt!";<br>
?&gt;</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$txt = "CodingThoughts.com";<br>
echo "I love " . $txt . "!";<br>
?&gt;</p>
<p class="para">The following example will output the sum of two variables:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = 5;<br>
$y = 4;<br>
echo $x + $y;<br>
?&gt;</p>
<p class="para">Note: You will learn more about the echo statement and how to output data to the screen in the next chapter.</p>
<h2>PHP is a Loosely Typed Language</h2>
<p class="para">In the example above, notice that we did not have to tell PHP which data type the variable is.
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.</p>
    <a href="php-eco.php" class="next">Next Topic</a>
</body>
</html>
