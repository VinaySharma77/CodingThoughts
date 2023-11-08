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
    <h1 class="head">PHP Sessions</h1>
<p class="para">A session is a way to store information (in variables) to be used across multiple pages.
Unlike a cookie, the information is not stored on the users computer.</p>
<h2>What is a PHP Session?</h2>
<p class="para">When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
So; Session variables hold information about one single user, and are available to all pages in one application.
Tip: If you need a permanent storage, you may want to store the data in a database.</p>
<h2>Start a PHP Session</h2>
<p class="para">A session is started with the session_start() function.
Session variables are set with the PHP global variable: $_SESSION.
Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
// Start the session<br>
session_start();<br>
?&gt;<br>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
// Set session variables<br>
$_SESSION["favcolor"] = "green";<br>
$_SESSION["favanimal"] = "cat";<br>
echo "Session variables are set.";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<p class="para">Note: The session_start() function must be the very first thing in your document. Before any HTML tags.</p>
<h2>Get PHP Session Variable Values</h2>
<p class="para">Next, we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").
Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).
Also notice that all session variable values are stored in the global $_SESSION variable:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
session_start();<br>
?&gt;<br>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
// Echo session variables that were set on previous page<br>
echo "Favorite color is " . $_SESSION["favcolor"] . ".&lt;br&gt;";<br>
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<p class="para">Another way to show all the session variable values for a user session is to run the following code:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
session_start();<br>
?&gt;<br>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
print_r($_SESSION);<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<p class="para">How does it work? How does it know it's me?
Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.</p>
<h2>Modify a PHP Session Variable</h2>
<p class="para">To change a session variable, just overwrite it:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
session_start();<br>
?&gt;</p>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
// to change a session variable, just overwrite it<br>
$_SESSION["favcolor"] = "yellow";<br>
print_r($_SESSION);<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<h2>Destroy a PHP Session</h2>
<p class="para">To remove all global session variables and destroy the session, use session_unset() and session_destroy():</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
session_start();<br>
?&gt;<br>
&lt;&#33;DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
// remove all session variables<br>
session_unset();<br>
// destroy the session<br>
session_destroy();<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<a href="php-cookies.php" class="next">Next Topic</a>
</body>
</html>
