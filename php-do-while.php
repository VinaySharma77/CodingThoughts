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
    <h1 class="head">PHP Do While Loop</h1>
<p class="para">The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.</p>
<p class="para">The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.<br>
Syntax<br>
do {<br>
  code to be executed;<br>
} while (condition is true);</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = 1;<br>
do {<br>
  echo "The number is: $x &lt;br&gt;";<br>
  $x++;<br>
} while ($x <= 5);<br>
?&gt;</p>
<p class="para">Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.
This example sets the $x variable to 6, then it runs the loop, and then the condition is checked:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = 6;<br>
do {<br>
  echo "The number is: $x &lt;br&gt;";<br>
  $x++;<br>
} while ($x <= 5);<br>
?&gt;</p>
<a href="php-functions.php" class="next">Next Topic</a>
</body>
</html>
