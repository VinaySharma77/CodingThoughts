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
    <h1 class="head">PHP If Else Statement</h1>
<p class="para">The if...else statement executes some code if a condition is true and another code if that condition is false.<br>
Syntax<br>
if (condition) {<br>
  code to be executed if condition is true;<br>
} else {<br>
  code to be executed if condition is false;<br>
}</p>
<h2>Example</h2>
<p class="para">Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:<br>
&lt;?php<br>
$t = date("H");<br>
if ($t < "20") {<br>
  echo "Have a good day!";<br>
} else {<br>
  echo "Have a good night!";<br>
}<br>
?&gt;</p>

    <a href="php-else-if.php" class="next">Next Topic</a>
</body>
</html>
