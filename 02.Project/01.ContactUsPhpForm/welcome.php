<!DOCTYPE HTML>
<html>

<head>
	<title>MJ Tech</title>
	<style>
		.cen{
			margin-left: auto;
			margin-right: auto;
		}
		</style>
</head>

<body bgcolor="#F0FFFF">
	<?php
	$data = $_GET['name'];
	echo "<h1><center style='color:Green;'>Hello</center></h1>";
	?>
	<h1><center style='color:red;'>Welcome  <?php echo $data; ?></center></h1>
</body>
<div>
	<?php include 'footer.php'; ?>
</div>
</html>
