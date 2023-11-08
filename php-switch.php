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
    <h1 class="head">PHP Switch Statement</h1>
<p class="para">The switch statement is used to perform different actions based on different conditions.</p>
<h2>The PHP switch Statement</h2>
<p class="para">Use the switch statement to select one of many blocks of code to be executed.<br>
Syntax<br>
switch (n) {<br>
  case label1:<br>
    code to be executed if n=label1;<br>
    break;<br>
  case label2:<br>
    code to be executed if n=label2;<br>
    break;<br>
  case label3:<br>
    code to be executed if n=label3;<br>
    break;<br>
    ...<br>
  default:<br>
    code to be executed if n is different from all labels;<br>
}<br>
This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$favcolor = "red";<br>
switch ($favcolor) {<br>
  case "red":<br>
    echo "Your favorite color is red!";<br>
    break;<br>
  case "blue":<br>
    echo "Your favorite color is blue!";<br>
    break;<br>
  case "green":<br>
    echo "Your favorite color is green!";<br>
    break;<br>
  default:<br>
    echo "Your favorite color is neither red, blue, nor green!";<br>
}<br>
?&gt;</p>
    <a href="php-for-loop.php" class="next">Next Topic</a>
</body>
</html>
