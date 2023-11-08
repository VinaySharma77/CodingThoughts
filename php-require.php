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
    <h1 class="head">PHP Require</h1>
<p class="para">The require statement is also used to include a file into the PHP code.
However, there is one big difference between include and require; when a file is included with the include statement and PHP cannot find it, the script will continue to execute:</p>
<h2>Example</h2>
<p class="para">&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;h1&gt;Welcome to my home page!&lt;&#47;h1&gt;<br>
&lt;?php include 'noFileExists.php';<br>
echo "I have a $color $car.";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<p class="para">Use require when the file is required by the application.
Use include when the file is not required and application should continue when file is not found.</p>
<a href="php-file-handling.php" class="next">Next Topic</a>
</body>
</html>
