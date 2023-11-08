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
    <h1 class="head">PHP Print Statement</h1>
    <p class="para">The print statement can be used with or without parentheses: print or print().<br>
Display Text<br>
The following example shows how to output text with the print command (notice that the text can contain HTML markup):</p>
    <h2>Example</h2>
    <p class="para">&lt;?php<br>
print "&lt;h2&gt;PHP is Fun!&lt;&#47;h2&gt;";<br>
print "Hello world!&lt;br&gt;";<br>
print "I'm about to learn PHP!";<br>
?&gt;</p>
    <p class="para">Display Variables<br>
The following example shows how to output text and variables with the print statement:</p>
    <h2>Example</h2>
    <p class="para">&lt;?php<br>
$txt1 = "Learn PHP";<br>
$txt2 = "W3Schools.com";<br>
$x = 5;<br>
$y = 4;<br>
print "&lt;h2&gt;" . $txt1 . "&lt;&#47;h2&gt;";<br>
print "Study PHP at " . $txt2 . "&lt;br&gt;";<br>
print $x + $y;<br>
?&gt;</p>
    <a href="php-data-types.php" class="next">Next Topic</a>
</body>
</html>
