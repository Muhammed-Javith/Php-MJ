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
	$nameErr = $emailErr = $phoneErr = $commentErr = "";
	?>
	<p><span class="error" hidden>* required field</span></p>
	

	<form method="post" action="validdbop.php">
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