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
    <h1 class="head">PHP For Loop</h1>
<h2>PHP Loops</h2>
<p class="para">Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.
Loops are used to execute the same block of code again and again, as long as a certain condition is true.
In PHP, we have the following loop types:<br>
while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array</p>
<h2>PHP for Loop</h2>
<p class="para">The for loop - Loops through a block of code a specified number of times.</p>
<p class="para">The for loop is used when you know in advance how many times the script should run.<br>
Syntax<br>
for (init counter; test counter; increment counter) {<br>
  code to be executed for each iteration;<br>
}<br>
Parameters:<br>
init counter: Initialize the loop counter value<br>
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.<br>
increment counter: Increases the loop counter value</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
for ($x = 0; $x <= 10; $x++) {<br>
  echo "The number is: $x &lt;br&gt;";<br>
}<br>
?&gt;</p>
<h2>Example Explained</h2>
<p class="para">$x = 0; - Initialize the loop counter ($x), and set the start value to 0<br>
$x <= 10; - Continue the loop as long as $x is less than or equal to 10<br>
$x++ - Increase the loop counter value by 1 for each iteration<br>
This example counts to 100 by tens:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
for ($x = 0; $x <= 100; $x+=10) {<br>
  echo "The number is: $x &lt;br&gt;";<br>
}<br>
?&gt;</p>
<h2>Example Explained</h2>
<p class="para">$x = 0; - Initialize the loop counter ($x), and set the start value to 0<br>
$x <= 100; - Continue the loop as long as $x is less than or equal to 100<br>
$x+=10 - Increase the loop counter value by 10 for each iteration</p>
    <a href="php-while-loop.php" class="next">Next Topic</a>
</body>
</html>
