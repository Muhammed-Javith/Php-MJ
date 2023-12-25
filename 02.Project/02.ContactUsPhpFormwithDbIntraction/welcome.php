<!DOCTYPE HTML>
<html>

<head>
	<title>MJ Tech</title>
	<style>
		.cen {
			margin-left: auto;
			margin-right: auto;
			margin-top:50px;
		}
	</style>
</head>

<body bgcolor="#F0FFFF">
	<?php
		// Database connection parameters
		$servername = "localhost";
		$username = "useradmin";
		$password = "admin123";
		$dbname = "myfactory";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->query("SELECT * FROM contactus");
		$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if (count($contacts) > 0) {
			
			echo "<table border='1' class = 'cen'>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Comment</th>
		</tr>";

			foreach ($contacts as $contact) {
				echo "<tr>
			<td>{$contact['name']}</td>
			<td>{$contact['email']}</td>
			<td>{$contact['phone']}</td>
			<td>{$contact['comment']}</td>
		</tr>";
			}

			echo "</table>";
		} else {
			echo "No contacts found.";
		}
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	} finally {
		$conn = null;
	}
	?>
</body>
<div>
	<?php include 'footer.php'; ?>
</div>

</html>