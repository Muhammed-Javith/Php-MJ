<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfactory";

//making connection with database
// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected successfully";
// } catch (PDOException $e) {
// 	echo "Connection failed: " . $e->getMessage();
// }

//create database
// try {
// 	$conn = new PDO("mysql:host=$servername", $username, $password);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	$sql = "CREATE DATABASE myDBPDO";
// 	// use exec() because no results are returned
// 	$conn->exec($sql);
// 	echo "Database created successfully<br>";
//   } catch(PDOException $e) {
// 	echo $sql . "<br>" . $e->getMessage();
//   }
  
//   $conn = null;

//insertion

// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	$sql = "INSERT INTO student (sid,sname,smarks)
// 	VALUES ('10', 'Doe', '1002')";
// 	// use exec() because no results are returned
// 	$conn->exec($sql);
// 	$last_id = $conn->lastInsertId();
// 	echo "New record created successfully. Last inserted ID is: " . $last_id;
//   } catch(PDOException $e) {
// 	echo $sql . "<br>" . $e->getMessage();
//   }
  
//   $conn = null;

//insertion using prepared statement

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	// prepare sql and bind parameters
	$stmt = $conn->prepare("INSERT INTO student (sid,sname,smarks)
	VALUES (:sid,:sname,:smarks)");
	$stmt->bindParam(':sid', $sid);
	$stmt->bindParam(':sname', $sname);
	$stmt->bindParam(':smarks', $smarks);
  
	// insert a row
	$sid = 251;
	$sname = "Divya";
	$smarks = 1230;
	$stmt->execute();
  
	// insert another row
	$sid = 701;
	$sname = "zara";
	$smarks = 1530;
	$stmt->execute();
  
	// insert another row
	$sid = 901;
	$sname = "lara";
	$smarks = 1630;
	$stmt->execute();
  
	echo "New records created successfully";
  } catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }
  $conn = null;

  ?>