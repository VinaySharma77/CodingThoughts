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
    <h1 class="head">PHP Comments</h1>
    <p class="para">A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.<br>
Comments can be used to:</p>
    <p class="para">Let others understand your code
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
PHP supports several ways of commenting:</p>
    <h2>Example</h2>
    <p class="para">Syntax for single-line comments:<br>
    &lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
// This is a single-line comment<br>
# This is also a single-line comment<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<h2>Example</h2>
<p class="para">Syntax for multiple-line comments:<br>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
/*<br>
This is a multiple-lines comment block<br>
that spans over multiple<br>
lines<br>
*/
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<h2>Example</h2>
<p class="para">Using comments to leave out parts of the code:<br>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
// You can also use comments to leave out parts of a code line<br>
$x = 5 /* + 15 */ + 5;<br>
echo $x;<bbr>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
    <a href="php-variables.php" class="next">Next Topic</a>
</body>
</html>
