
<!DOCTYPE html>
<html>
<body>

<?php

//if statement
$t = 10;
if ($t < 20) {
  echo "Have a good day!";
}
echo "<br>";
echo "<br>";

//if-else
$t1 = 30;
if ($t1 < 20) {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
echo "<br>";
echo "<br>";

//if-else-if
$s = 40;
if ($t < 10) {
    echo "Have a good morning!";
  } elseif ($t < 20) {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
echo "<br>";
echo "<br>";

//ternary operator
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;
echo "<br>";
echo "<br>";

//switch-case
$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
echo "<br>";

//while-loop
$x = 0;
while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
echo "<br>";
echo "<br>";

//do-while
$x1 = 1;
do {
  echo "The number is: $x <br>";
  $x1++;
} while ($x1 <= 5);
echo "<br>";
echo "<br>";

//for-loop
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }
echo "<br>";
echo "<br>";

//for-each
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}

echo "<br>";
echo "<br>";

//for-each example two:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

echo "<br>";
echo "<br>";

//break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

echo "<br>";
echo "<br>";

//continue
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
echo "<br>";
echo "<br>";
?> 

</body>
</html>