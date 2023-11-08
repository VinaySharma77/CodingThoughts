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
    <h1 class="head">PHP 2D Array</h1>
<p class="para">In the previous pages, we have described arrays that are a single list of key/value pairs.
However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.</p>
<h2>PHP - Multidimensional Arrays</h2>
<p class="para">A multidimensional array is an array containing one or more arrays.
PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
The dimension of an array indicates the number of indices you need to select an element.
For a two-dimensional array you need two indices to select an element
For a three-dimensional array you need three indices to select an element</p>
<p class="para">A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).<br>
We can store the data from the table above in a two-dimensional array, like this:<br>
$cars = array (<br>
  array("Volvo",22,18),<br>
  array("BMW",15,13),<br>
  array("Saab",5,2),<br>
  array("Land Rover",17,15)<br>
);<br>
Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.<br>
To get access to the elements of the $cars array we must point to the two indices (row and column):</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".&lt;br&gt;";<br>
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".&lt;br&gt;";<br>
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".&lt;br&gt;";<br>
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".&lt;br&gt;";<br>
?&gt;</p>
<p class="para">We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
for ($row = 0; $row < 4; $row++) {<br>
  echo "&lt;p&gt;&lt;b&gt;Row number $row&lt;&#47;b&gt;&lt;&#47;p&gt;";<br>
  echo "&lt;ul&gt;";<br>
  for ($col = 0; $col < 3; $col++) {<br>
    echo "&lt;li&gt;".$cars[$row][$col]."&lt;&#47;li&gt;";<br>
  }<br>
  echo "&lt;&#47;ul&gt;";<br>
}<br>
?&gt;</p>
<a href="php-array-sort.php" class="next">Next Topic</a>
</body>
</html>
