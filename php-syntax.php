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
    <h1 class="head">PHP Syntax</h1>
    <p class="para">A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
    <h2>Syntax of PHP</h2>
    <p class="para">
    A PHP script can be placed anywhere in the document.
A PHP script starts with &lt;?php and ends with ?&gt;:<br>
&lt;?php<br>
// PHP code goes here<br>
?&gt;<br>
The default file extension for PHP files is ".php".<br>
A PHP file normally contains HTML tags, and some PHP scripting code.<br>
Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:
    </p>
    <h2>Example</h2>
    <p>
    &lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;h1&gt;My first PHP page&lt;&#47;h1&gt;<br>
&lt;?php<br>
echo "Hello World!";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;
    </p>
    <p class="para">Note: PHP statements end with a semicolon (;).</p>
    <h2>PHP Case Sensitivity</h2>
    <p class="para">In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
    In the example below, all three echo statements below are equal and legal:</p>
    <h2>Example</h2>
    <p class="para">
    &lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
ECHO "Hello World!&lt;br&gt;";<br>
echo "Hello World!&lt;br&gt;";<br>
EcHo "Hello World!&lt;br&gt;";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;
    </p>
    <p class="para">Note: However; all variable names are case-sensitive!</p>
    <p class="para">Look at the example below; only the first statement will display the value of the $color variable! This is because $color, $COLOR, and $coLOR are treated as three different variables:</p>
    <h2>Example</h2>
    <p class="para">
    &lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
$color = "red";<br>
echo "My car is " . $color . "&lt;br&gt;";<br>
echo "My house is " . $COLOR . "&lt;br&gt;";<br>
echo "My boat is " . $coLOR . "&lt;br&gt;";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;
    </p>
    <a href="php-comments.php" class="next">Next Topic</a>
</body>
</html>
