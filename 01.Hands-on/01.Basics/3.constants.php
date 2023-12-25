<?php
namespace myArea;

function myValue5(){
  return __NAMESPACE__;
}
?>

<!DOCTYPE html>
<html>
<body>

<?php



//Create a constant with a case-sensitive name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
echo "<br>";

//Create a constant with a case-insensitive name:
//define("WELCOME", "Welcome to W3Schools.com!", true);
//echo welcome;
echo "<br>";
echo "<br>";

const MYCAR = "Volvo";
echo MYCAR;
echo "<br>";
echo "<br>";

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
echo "<br>";
echo "<br>";


//magical constant

class Fruits {
  public function myValue(){
    return __CLASS__; //return className
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
echo "<br>";
echo "<br>";

echo __DIR__; //The directory of the file.
echo "<br>";
echo "<br>";

echo __FILE__; //The file name including the full path.

echo "<br>";
echo "<br>";


function myValues(){
  return __FUNCTION__;  //If inside a function, the function name is returned.
}
echo myValues();
echo "<br>";
echo "<br>";

echo __LINE__; //	The current line number.
echo "<br>";
echo "<br>";

class Fruit {
  public function myValue2(){
    return __METHOD__;
  }
}
$kiwi = new Fruit();
echo $kiwi->myValue2();
echo "<br>";
echo "<br>";

echo myValue5(); //namespace declared at top
echo "<br>";
echo "<br>";


?> 

</body>
</html>