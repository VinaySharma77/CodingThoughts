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
    <h1 class="head">PHP If Statement</h1>
<h2>PHP Conditional Statements</h2>
<p class="para">Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.<br>
In PHP we have the following conditional statements:<br>
if statement - executes some code if one condition is true<br>
if...else statement - executes some code if a condition is true and another code if that condition is false<br>
if...elseif...else statement - executes different codes for more than two conditions<br>
switch statement - selects one of many blocks of code to be executed</p>
<h2>PHP - The if Statement</h2>
<p class="para">The if statement executes some code if one condition is true.<br>
Syntax<br>
if (condition) {<br>
  code to be executed if condition is true;<br>
}</p>
<h2>Example</h2>
<p class="para">Output "Have a good day!" if the current time (HOUR) is less than 20:<br>
&lt;?php<br>
$t = date("H");<br>
if ($t < "20") {<br>
  echo "Have a good day!";<br>
}<br>
?&gt;</p>
    <a href="php-if-else.php" class="next">Next Topic</a>
</body>
</html>
