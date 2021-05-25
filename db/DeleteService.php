<?php
include 'connect.php';

$id = $_POST['Id'];

mysqli_query($connect, "DELETE FROM `datasheet` WHERE `datasheet`.`Id` = $id ");

header('Location: /pagetwo.php');

?>