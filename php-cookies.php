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
    <h1 class="head">PHP Cookies</h1>
    <h2>What is a Cookie?</h2>
<p class="para">A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</p>
<h2>Create Cookies With PHP</h2>
<p class="para">A cookie is created with the setcookie() function.<br>
Syntax<br>
setcookie(name, value, expire, path, domain, secure, httponly);<br>
Only the name parameter is required. All other parameters are optional.</p>
<h2>PHP Create/Retrieve a Cookie</h2>
<p class="para">The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).
We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cookie_name = "user";<br>
$cookie_value = "John Doe";<br>
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day<br>
?gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
if(!isset($_COOKIE[$cookie_name])) {<br>
  echo "Cookie named '" . $cookie_name . "' is not set!";<br>
} else {<br>
  echo "Cookie '" . $cookie_name . "' is set!&lt;br&gt;";<br>
  echo "Value is: " . $_COOKIE[$cookie_name];<br>
}<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<p class="para">Note: The setcookie() function must appear BEFORE the &lt;html&gt; tag.
Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).</p>
<h2>Modify a Cookie Value</h2>
<p class="para">To modify a cookie, just set (again) the cookie using the setcookie() function:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cookie_name = "user";<br>
$cookie_value = "Alex Porter";<br>
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");<br>
?&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
if(!isset($_COOKIE[$cookie_name])) {<br>
  echo "Cookie named '" . $cookie_name . "' is not set!";<br>
} else {<br>
  echo "Cookie '" . $cookie_name . "' is set!&lt;br&gt;";<br>
  echo "Value is: " . $_COOKIE[$cookie_name];<br>
}<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<h2>Delete a Cookie</h2>
<p class="para">To delete a cookie, use the setcookie() function with an expiration date in the past:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
// set the expiration date to one hour ago<br>
setcookie("user", "", time() - 3600);<br>
?&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
echo "Cookie 'user' is deleted.";<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<h2>Check if Cookies are Enabled</h2>
<p class="para">The following example creates a small script that checks whether cookies are enabled. First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
setcookie("test_cookie", "test", time() + 3600, '/');<br>
?&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>
&lt;?php<br>
if(count($_COOKIE) > 0) {<br>
  echo "Cookies are enabled.";<br>
} else {<br>
  echo "Cookies are disabled.";<br>
}<br>
?&gt;<br>
&lt;&#47;body&gt;<br>
&lt;&#47;html&gt;</p>
<a href="php-include.php" class="next">Next Topic</a>
</body>
</html>
