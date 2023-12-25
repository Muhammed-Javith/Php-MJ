<?php
	// Database connection parameters
	$servername = "localhost";
	$username = "useradmin";
	$password = "admin123";
	$dbname = "myfactory";

	$name = $email = $phone = $comment = "";

	$nameErr = $emailErr = $phoneErr = $commentErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {
			$name = test_input($_POST["name"]);
			//check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
				$nameErr = "Only alphabets and whitespace are allowed.";
			}
		}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Email is not valid.";
			}
		}
		if (empty($_POST["phone"])) {
			$phoneErr = "Phone number is required";
		} else {
			$phone = test_input($_POST["phone"]);
			if (!preg_match("/^[0-9]*$/", $phone)) {
				$phoneErr = "Only numeric value is allowed.";
			}
		}
		if (empty($_POST["comment"])) {
			$commentErr = "Write Something";
		} else {
			$comment = test_input($_POST["comment"]);
		}
	}
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if (empty($nameErr) && empty($emailErr) && empty($phoneErr)) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			//create a table
			$conn->exec("CREATE TABLE IF NOT EXISTS contactus (
				name VARCHAR(30) NOT NULL,
				email VARCHAR(30) NOT NULL,
				phone VARCHAR(50),
				comment TEXT
				)");
			// Insert data into the 'contacts' table
			$stmt = $conn->prepare("INSERT INTO contactus (name, email, phone, comment) VALUES (:name, :email, :phone, :comment)");
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':comment', $comment);
			$stmt->execute();
			//echo "Data saved successfully!";
			if (isset($_POST['submit'])) {
				// Fetching variables of the form which travels in URL
				$mname = $_POST['name'];
				$memail = $_POST['email'];
				$mphone = $_POST['phone'];
				$mcomment = $_POST['comment'];
				if ($mname != '' && $memail != '' && $mphone != '' && $mcomment != '') {
					header('location:welcome.php');
				}
			}
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		} finally {
			$conn = null;
		}
	}

	?>