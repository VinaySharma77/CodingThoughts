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
    <h1 class="head">PHP Include</h1>
<p class="para">The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.</p>
<p class="para">It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.
The include and require statements are identical, except upon failure:
require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue<br>
So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.
Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your web pages. Then, when the header needs to be updated, you can only update the header include file.<br>
Syntax<br>
include 'filename';<br>
or<br>
require 'filename';</p>
<p class="para">To include the footer file in a page, use the include statement:</p>
<h2>Example</h2>
<p class="para">&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;h1&gt;Welcome to my home page!&lt;&#47;h1&gt;<br>
&lt;p&gt;Some text.&lt;&#47;p&gt;<br>
&lt;p&gt;Some more text.&lt;&#47;p&gt;<br>
&lt;?php include 'footer.php';?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<a href="php-require.php" class="next">Next Topic</a>
</body>
</html>
