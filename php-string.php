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
    <h1 class="head">PHP String</h1>
    <p class="para">A string is a sequence of characters, like "Hello world!".</p>
    <h2>PHP String Functions</h2>
    <p class="para">In this chapter we will look at some commonly used functions to manipulate strings.</p>
    <h2>strlen() - Return the Length of a String</h2>
    <p class="para">The PHP strlen() function returns the length of a string.</p>
    <h2>Example</h2>
    <p class="para">Return the length of the string "Hello world!":<br>
    &lt;?php<br>
echo strlen("Hello world!"); // outputs 12<br>
?&gt;</p>
<h2>str_word_count() - Count Words in a String</h2>
<p>The PHP str_word_count() function counts the number of words in a string.</p>
<h2>Example</h2>
<p class="para">Count the number of word in the string "Hello world!":<br>
&lt;?php<br>
echo str_word_count("Hello world!"); // outputs 2<br>
?&gt;</p>
<h2>strrev() - Reverse a String</h2>
<p class="para">The PHP strrev() function reverses a string.</p>
<h2>Example</h2>
<p class="para">Reverse the string "Hello world!":<br>
&lt;?php<br>
echo strrev("Hello world!"); // outputs !dlrow olleH<br>
?&gt;</p>
<h2>strpos() - Search For a Text Within a String</h2>
<p class="para">The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>
<h2>Example</h2>
<p class="para">Search for the text "world" in the string "Hello world!":<br>
&lt;?php<br>
echo strpos("Hello world!", "world"); // outputs 6<br>
?&gt;</p>
<p class="para">Tip: The first character position in a string is 0 (not 1).</p>
<h2>str_replace() - Replace Text Within a String</h2>
<p class="para">The PHP str_replace() function replaces some characters with some other characters in a string.</p>
<h2>Example</h2>
<p class="para">Replace the text "world" with "Dolly":<br>
&lt;?php<br>
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!<br>
?&gt;</p>
    <a href="php-number.php" class="next">Next Topic</a>
</body>
</html>
