<?php

$CSVvar = fopen("student.csv", "r");
if ($CSVvar !== FALSE) {
?>
	<html>
	<head>
		<style>
			table,td {
				border: 1px solid black;
                background-color: powderblue;
			}
            .cen,h1{
			margin-left: auto;
			margin-right: auto;
            margin-top:50px;
		}
		</style>
	</head>
    <body bgcolor="#F0FFFF">
	<div>
    <h1><center style='color:Green;'>Student Database</center></h1>
		<table class="cen" style="border:1px solid black" >

<?php
	while (! feof($CSVvar)) {
		$data = fgetcsv($CSVvar, 1000, ",");
		if (! empty($data)) {
			?>
			<tr>
				<td><?php echo $data[0]; ?></td>
				<td><div> <?php echo $data[2]?></td>
				<td><div><?php echo $data[1]; ?></div></td>
			</tr>
<?php }?>
<?php
	}
	?>
		</table>
	</div>
</body>
	</html>
<?php
}
fclose($CSVvar);
?>

