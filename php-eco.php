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
    <h1 class="head">PHP Eco Statement</h1>
    <p class="para">With PHP, there are two basic ways to get output: echo and print.
In this tutorial we use echo or print in almost every example. So, this chapter contains a little more info about those two output statements.
</p>
    <p class="para">echo and print are more or less the same. They are both used to output data to the screen.
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
</p>
<p class="para">The echo statement can be used with or without parentheses: echo or echo().<br>
Display Text<br>
The following example shows how to output text with the echo command (notice that the text can contain HTML markup):</p>
<h2>Example</h2>
    <p class="para">&lt;?php<br>
echo "&lt;h2&gt;PHP is Fun!&lt;&#47;h2&gt;";<br>
echo "Hello world!&lt;br&gt;";<br>
echo "I'm about to learn PHP!&lt;br&gt;";<br>
echo "This ", "string ", "was ", "made ", "with multiple parameters.";<br>
?&gt;</p>
<p class="para">Display Variables<br>
The following example shows how to output text and variables with the echo statement:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$txt1 = "Learn PHP";<br>
$txt2 = "W3Schools.com";<br>
$x = 5;<br>
$y = 4;<br>
echo "&lt;h2&gt;" . $txt1 . "&lt;&#47;h2&gt;";<br>
echo "Study PHP at " . $txt2 . "&lt;br&gt;";<br>
echo $x + $y;<br>
?&gt;</p>
    <a href="php-print.php" class="next">Next Topic</a>
</body>
</html>
