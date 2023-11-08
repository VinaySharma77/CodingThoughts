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
    <h1 class="head">PHP Math</h1>
<p class="para">PHP has a set of math functions that allows you to perform mathematical tasks on numbers.</p>
<h2>PHP pi() Function</h2>
<p class="para">The pi() function returns the value of PI:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(pi()); // returns 3.1415926535898<br>
?&gt;</p>
<h2>PHP min() and max() Functions</h2>
<p class="para">The min() and max() functions can be used to find the lowest or highest value in a list of arguments:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(min(0, 150, 30, 20, -8, -200));  // returns -200<br>
echo(max(0, 150, 30, 20, -8, -200));  // returns 150<br>
?&gt;</p>
<h2>PHP abs() Function</h2>
<p class="para">The abs() function returns the absolute (positive) value of a number:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(abs(-6.7));  // returns 6.7<br>
?&gt;</p>
<h2>PHP sqrt() Function</h2>
<p class="para">The sqrt() function returns the square root of a number:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(sqrt(64));  // returns 8<br>
?&gt;</p>
<h2>PHP round() Function</h2>
<p class="para">The round() function rounds a floating-point number to its nearest integer:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(round(0.60));  // returns 1<br>
echo(round(0.49));  // returns 0<br>
?&gt;</p>
<h2>Random Numbers</h2>
<p class="para">The rand() function generates a random number:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(rand());<br>
?&gt;</p>
<p class="para">To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.<br>
For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo(rand(10, 100));<br>
?&gt;</p>
<a href="php-operators.php" class="next">Next Topic</a>
</body>
</html>
