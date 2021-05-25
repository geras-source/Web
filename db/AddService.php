<?php 
include 'connect.php';

$name = $_POST['Name'];
$poweroutput = $_POST['PowerOutput'];
$voulum = $_POST['Volume'];
$model = $_POST['Model'];

mysqli_query($connect,"INSERT INTO `datasheet` (`Id`, `Name`, `PowerOutput`, `Volume`, `Model`) VALUES (NULL, '$name', '$poweroutput', '$voulum', '$model')");

header('Location: /pagetwo.php');
?>