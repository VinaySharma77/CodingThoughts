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
    <h1 class="head">PHP While Loop</h1>
<p class="para">The while loop - Loops through a block of code as long as the specified condition is true.</p>
<p class="para">The while loop executes a block of code as long as the specified condition is true.<br>
Syntax<br>
while (condition is true) {<br>
  code to be executed;<br>
}</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = 1;<br>
while($x <= 5) {<br>
  echo "The number is: $x &lt;br&gt;";<br>
  $x++;<br>
}<br>
?&gt;</p>
<h2>Example Explained</h2>
<p class="para">$x = 1; - Initialize the loop counter ($x), and set the start value to 1<br>
$x <= 5 - Continue the loop as long as $x is less than or equal to 5<br>
$x++; - Increase the loop counter value by 1 for each iteration<br>
This example counts to 100 by tens:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = 0;<br>
while($x <= 100) {<br>
  echo "The number is: $x &lt;br&gt;";<br>
  $x+=10;<br>
}<br>
?&gt;</p>
<h2>Example Explained</h2>
<p class="para">$x = 0; - Initialize the loop counter ($x), and set the start value to 0<br>
$x <= 100 - Continue the loop as long as $x is less than or equal to 100<br>
$x+=10; - Increase the loop counter value by 10 for each iteration</p>
    <a href="php-do-while.php" class="next">Next Topic</a>
</body>
</html>
