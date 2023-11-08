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
    <h1 class="head">PHP Array Sorting</h1>
<p class="para">The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.</p>
<h2>PHP - Sort Functions For Arrays</h2>
<p class="para">In this chapter, we will go through the following PHP array sort functions:<br>
sort() - sort arrays in ascending order<br>
rsort() - sort arrays in descending order<br>
asort() - sort associative arrays in ascending order, according to the value<br>
ksort() - sort associative arrays in ascending order, according to the key<br>
arsort() - sort associative arrays in descending order, according to the value<br>
krsort() - sort associative arrays in descending order, according to the key</p>
<h2>Sort Array in Ascending Order - sort()</h2>
<p class="para">The following example sorts the elements of the $cars array in ascending alphabetical order:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
sort($cars);<br>
?&gt;</p>
<p class="para">The following example sorts the elements of the $numbers array in ascending numerical order:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$numbers = array(4, 6, 2, 22, 11);<br>
sort($numbers);<br>
?&gt;</p>
<h2>Sort Array in Descending Order - rsort()</h2>
<p class="para">The following example sorts the elements of the $cars array in descending alphabetical order:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
rsort($cars);<br>
?&gt;</p>
<p class="para">The following example sorts the elements of the $numbers array in descending numerical order:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$numbers = array(4, 6, 2, 22, 11);<br>
rsort($numbers);<br>
?&gt;</p>
<h2>Sort Array (Ascending Order), According to Value - asort()</h2>
<p class="para">The following example sorts an associative array in ascending order, according to the value:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
asort($age);<br>
?&gt;</p>
<h2>Sort Array (Ascending Order), According to Key - ksort()</h2>
<p class="para">The following example sorts an associative array in ascending order, according to the key:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
ksort($age);<br>
?&gt;</p>
<h2>Sort Array (Descending Order), According to Value - arsort()</h2>
<p class="para">The following example sorts an associative array in descending order, according to the value:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
arsort($age);<br>
?&gt;</p>
<h2>Sort Array (Descending Order), According to Key - krsort()</h2>
<p class="para">The following example sorts an associative array in descending order, according to the key:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
krsort($age);<br>
?&gt;</p>
<a href="php-sessions.php" class="next">Next Topic</a>
</body>
</html>
