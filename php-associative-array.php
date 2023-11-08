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
    <h1 class="head">PHP Associative Array</h1>
<p class="para">Associative arrays are arrays that use named keys that you assign to them.<br>
There are two ways to create an associative array: <br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
or:<br>
$age['Peter'] = "35";<br>
$age['Ben'] = "37";<br>
$age['Joe'] = "43";<br>
The named keys can then be used in a script:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
echo "Peter is " . $age['Peter'] . " years old.";<br>
?&gt;</p>
<h2>Loop Through an Associative Array</h2>
<p class="para">To loop through and print all the values of an associative array, you could use a foreach loop, like this:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
foreach($age as $x => $x_value) {<br>
  echo "Key=" . $x . ", Value=" . $x_value;<br>
  echo "&lt;br&gt;";<br>
}<br>
?&gt;</p>
<a href="php-2d-array.php" class="next">Next Topic</a>
</body>
</html>
