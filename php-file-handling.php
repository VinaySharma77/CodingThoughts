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
    <h1 class="head">PHP File Handling</h1>
<p class="para">File handling is an important part of any web application. You often need to open and process a file for different tasks.</p>
<h2>PHP Manipulating Files</h2>
<p class="para">PHP has several functions for creating, reading, uploading, and editing files.
Be careful when manipulating files!
When you are manipulating files you must be very careful.
You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident.</p>
<h2>PHP readfile() Function</h2>
<p class="para">The readfile() function reads a file and writes it to the output buffer.<br>
Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:<br>
AJAX = Asynchronous JavaScript and XML<br>
CSS = Cascading Style Sheets<br>
HTML = Hyper Text Markup Language<br>
PHP = PHP Hypertext Preprocessor<br>
SQL = Structured Query Language<br>
SVG = Scalable Vector Graphics<br>
XML = EXtensible Markup Language<br>
The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success):</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo readfile("webdictionary.txt");<br>
?&gt;</p>
<p class="para">The readfile() function is useful if all you want to do is open up a file and read its contents.</p>
<a href="php-file-handling.php" class="next">Next Topic</a>
</body>
</html>
