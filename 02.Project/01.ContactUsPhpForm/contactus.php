<!DOCTYPE HTML>
<html>

<head>
	<style>
		.error {
			color: #FF0000;
		}

		.cen {
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>

<body bgcolor="#F0FFFF">
	<div>
		<?php include 'header.php'; ?>
	</div>
	<?php
	$nameErr = $emailErr = $phoneErr  = $commentErr = "";
	$name = $email = $phone = $comment =  "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {
			$name = test_input($_POST["name"]);
			//check if name only contains letters and whitespace
			if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
				$nameErr = "Only alphabets and whitespace are allowed." ;
			}
		}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
			$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
			if (!preg_match ($pattern, $email) ){  
				$emailErr = "Email is not valid.";  
			}
		}
		if (empty($_POST["phone"])) {
			$phoneErr = "Phone number is required";
		} else {
			$phone = test_input($_POST["phone"]);
			if (!preg_match ("/^[0-9]*$/", $phone) ){  
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
	?>


	<?php
	if (isset($_POST['submit'])) {
		// Fetching variables of the form which travels in URL
		$mname = $_POST['name'];
		$memail = $_POST['email'];
		$mphone = $_POST['phone'];
		$mcomment = $_POST['comment'];
		if ($mname != '' && $memail != '' && $mphone != '' && $mcomment != '') {
			header('location:welcome.php ?name='.$name);
			//header('location:C:/xampp/htdocs/Virtusa/Day1/ContactUsPhpFormwelcome.php');
		} else {
	?>
			<span><?php echo "Please fill all fields.....!!!!!!!!!!!!"; ?></span>
	<?php
		}
	}
	?>

	<p><span class="error" hidden>* required field</span></p>


	<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
		<table class="cen">
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name">
					<span class="error">* <?php echo $nameErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email">
					<span class="error">* <?php echo $emailErr; ?></span>
				</td>
			</tr>

			<tr>
				<td>Contact No:</td>
				<td> <input type="tel" name="phone">
					<span class="error">* <?php echo $phoneErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Comment:</td>
				<td> <textarea name="comment" rows="5" cols="40"></textarea>
					<span class="error">* <?php echo $commentErr; ?></span>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>


</body>
<div>
	<?php include 'footer.php'; ?>
</div>

</html>