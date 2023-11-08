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
    <h1 class="head">PHP Indexed Array</h1>
<p class="para">There are two ways to create indexed arrays:<br>
The index can be assigned automatically (index always starts at 0), like this:<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
or the index can be assigned manually:<br>
$cars[0] = "Volvo";<br>
$cars[1] = "BMW";<br>
$cars[2] = "Toyota";<br>
The following example creates an indexed array named $cars, assigns three elements to it, and then prints a text containing the array values:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";<br>
?&gt;</p>
<h2>Loop Through an Indexed Array</h2>
<p class="para">To loop through and print all the values of an indexed array, you could use a for loop, like this:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
$arrlength = count($cars);<br>
for($x = 0; $x < $arrlength; $x++) {<br>
  echo $cars[$x];<br>
  echo "&lt;br&gt;";<br>
}<br>
?&gt;</p>
<a href="php-associative-array.php" class="next">Next Topic</a>
</body>
</html>
