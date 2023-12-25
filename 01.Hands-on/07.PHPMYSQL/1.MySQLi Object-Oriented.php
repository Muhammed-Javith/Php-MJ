<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
/*			// Create connection
			$conn = new mysqli($servername, $username, $password);

			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully";

			// Create database
			$sql = "CREATE DATABASE myjadb";
			if ($conn->query($sql) === TRUE) {
			echo "Database created successfully";
			} else {
			echo "Error creating database: " . $conn->error;
			}

			$conn->close();
*/

//prepared statement


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO students (Name,gender,City) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $Name, $gender, $City);

// set parameters and execute
$Name = "Doe";
$gender ="M";
$City = "UAK";
$stmt->execute();

$sid ="michel";
$sname = "M";
$smark = "US";
$stmt->execute();

$sid = "Zara";
$sname = "F";
$smark = "UAE";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
