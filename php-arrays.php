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
    <h1 class="head">PHP Arrays</h1>
<p class="para">An array stores multiple values in one single variable:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";<br>
?&gt;</p>
<h2>What is an Array?</h2>
<p class="para">An array is a special variable, which can hold more than one value at a time.
If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:<br>
$cars1 = "Volvo";<br>
$cars2 = "BMW";<br>
$cars3 = "Toyota";<br>
However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?
The solution is to create an array!
An array can hold many values under a single name, and you can access the values by referring to an index number.</p>
<h2>Create an Array in PHP</h2>
<p class="para">In PHP, the array() function is used to create an array:<br>
array();<br>
In PHP, there are three types of arrays:<br>
Indexed arrays - Arrays with a numeric index<br>
Associative arrays - Arrays with named keys<br>
Multidimensional arrays - Arrays containing one or more arrays</p>
<h2>Get The Length of an Array - The count() Function</h2>
<p class="para">The count() function is used to return the length (the number of elements) of an array:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
echo count($cars);<br>
?&gt;</p>
<a href="php-indexed-array.php" class="next">Next Topic</a>
</body>
</html>
