<!DOCTYPE html>
<html>
<body>

<?php



//case sensitivity
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";





// This is a single-line comment

# This is also a single-line comment


/*
This is a multiple-lines comment block
that spans over multiple
lines
*/




//variable declaration

$txt1 = "Hello world!";
$x = 5;
$y = 10.5;
$txt = "W3Schools.com";
echo "I love $txt!<br>";
//or
echo "I love " . $txt . "!";





//scope
//global scope
$x = 5; // global scope

function myTest2() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

echo "<p>Variable x outside function is: $x</p><br>";




//local scope
function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";


//global scope access within function

$x = 5;
$y = 10;

function myTest4() {
  global $x, $y;
  $y = $x + $y;
}

myTest4();
echo $y; // outputs 15
echo "<br>";



//global scope access within function method 2

$x = 5;
$y = 10;

function myTest5() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest5();
echo $y; // outputs 15
echo"<br>";



//static scope

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
 
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";


// example for echo

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2><br>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
echo "<br>";


?> 

</body>
</html>