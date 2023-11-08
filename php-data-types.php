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
    <h1 class="head">PHP Data Types</h1>
    <p class="para">Variables can store data of different types, and different data types can do different things.<br>
PHP supports the following data types:<br>
String<br>
Integer<br>
Float (floating point numbers - also called double)<br>
Boolean<br>
Array<br>
Object<br>
NULL<br>
Resource</p>
<h2>PHP String</h2>
<p class="para">A string is a sequence of characters, like "Hello world!".
A string can be any text inside quotes. You can use single or double quotes:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = "Hello world!";<br>
$y = 'Hello world!';<br>
echo $x;<br>
echo "&lt;br&gt;";<br>
echo $y;<br>
?&gt;</p>
<h2>PHP Integer</h2>
<p class="para">An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.<br>
Rules for integers:<br>
An integer must have at least one digit<br>
An integer must not have a decimal point<br>
An integer can be either positive or negative<br>
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation<br>
In the following example $x is an integer. The PHP var_dump() function returns the data type and value:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = 5985;<br>
var_dump($x);<br>
?&gt;</p>
<h2>PHP Float</h2>
<p class="para">A float (floating point number) is a number with a decimal point or a number in exponential form.<br>
In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
    <h2>Example</h2>
    <p class="para">&lt;?php<br>
$x = 10.365;<br>
var_dump($x);<br>
?&gt;</p>
<h2>PHP Boolean</h2>
<p class="para">A Boolean represents two possible states: TRUE or FALSE.<br>
$x = true;<br>
$y = false;</p>
<h2>PHP Array</h2>
<p class="para">An array stores multiple values in one single variable.<br>
In the following example $cars is an array. The PHP var_dump() function returns the data type and value:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$cars = array("Volvo","BMW","Toyota");<br>
var_dump($cars);<br>
?&gt;</p>
<h2>PHP Object</h2>
<p class="para">Classes and objects are the two main aspects of object-oriented programming.
A class is a template for objects, and an object is an instance of a class.
When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
class Car {<br>
  public $color;<br>
  public $model;<br>
  public function __construct($color, $model) {<br>
    $this->color = $color;<br>
    $this->model = $model;<br>
  }<br>
  public function message() {<br>
    return "My car is a " . $this->color . " " . $this->model . "!";<br>
  }<br>
}<br>
$myCar = new Car("black", "Volvo");<br>
echo $myCar -> message();<br>
echo "&lt;br&gt;";<br>
$myCar = new Car("red", "Toyota");<br>
echo $myCar -> message();<br>
?&gt;</p>
<h2>PHP NULL Value</h2>
<p class="para">Null is a special data type which can have only one value: NULL.
A variable of data type NULL is a variable that has no value assigned to it.
Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
Variables can also be emptied by setting the value to NULL:</p>
<h2>Example</h2>
<p class="para">&lt;?php<br>
$x = "Hello world!";<br>
$x = null;<br>
var_dump($x);<br>
?&gt;</p>
    <a href="php-string.php" class="next">Next Topic</a>
</body>
</html>
