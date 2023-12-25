<!DOCTYPE html>
<html>
<body>

<?php

//string

$x = "Hello world!";
$y = 'Hello world!';
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "<br>";
echo "<br>";

echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");
echo "<br>";
echo "<br>";

//int
$x = 5985;
var_dump($x);
echo "<br>";

//float
$x = 10.365;
var_dump($x);
echo "<br>";


//boolean
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo "<br>";
echo "<br>";

//Numbers
//Check if the type of a variable is float:
$x = 10.365;
var_dump(is_float($x));
echo "<br>";

//Check if a numeric value is finite or infinite:
$x = 1.9e411;
var_dump($x);
echo "<br>";

//Check if the variable is numeric:
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
echo "<br>";
echo "<br>";

//Math function
echo(pi());
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "<br>";

//abs-returns positive value
echo(abs(-6.7));
echo "<br>";

echo(sqrt(64)); //return square of number
echo "<br>";

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
echo "<br>";

echo(rand());
echo "<br>";

echo(rand(10, 100));
echo "<br>";
echo "<br>";
echo "<br>";



//object
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";

//null

$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";


?> 

</body>
</html>