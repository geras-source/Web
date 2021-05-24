<?php include './db/connect.php';
$DataSheet = mysqli_query($connect, "SELECT * FROM `datasheet`");
	$DataSheet = mysqli_fetch_all($DataSheet);
?>