<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8" />
	<title></title>
	<link rel="icon" type="image/png" href="https://i.pinimg.com/736x/02/de/65/02de65ebad5b8baad6888d017f804c54.jpg" />
	<meta name="description" content="toyta supra"> 

	<link rel="stylesheet" href="css/stylepagetwo.css">
	<link rel="stylesheet" href="./css/cssswup.css">
	<link rel="stylesheet" href="./css/addservice.css">
	<link rel="stylesheet" href="./css/deleteservice.css">
</head>

<body>
<?php include './template/header2.php';?>

<main id="swup" class="transition-fade">
<!--</content>-->
<?php include './db/ReadService.php';?>

<table class="table" style="margin-top: 70px">
	<tr>
		<th><button style="background-color: #FFFFFF;  border:none;">№</button></th>
		<th>Название</th>
		<th>Л.С.</th>
		<th>Объем</th>
		<th>Модель</th>
	</tr>
	<?php /* конкатенация */
	foreach($DataSheet as $datasheet){
		echo '
		<tr>
		<td>'.$datasheet[0].'</td> 
		<td>'.$datasheet[1].'</td>
		<td>'.$datasheet[2].'</td>
		<td>'.$datasheet[3].'</td>
		<td>'.$datasheet[4].'</td>
	</tr>
		';
	}
?>
</table>

<form id="OpacityChange" action="./db/AddService.php" method="post" class="form-wrapper">
        <fieldset class="section is-active">
          <h3>Добавить</h3>
          <input type="text" name="Name" placeholder="Название">
          <input type="text" name="Model" placeholder="Модель">
          <input type="text" name="PowerOutput" placeholder="Объем">
          <input type="text" name="Volume" placeholder="Л.С.">
		  <button onclick="OpacityChange0()" class="button" type="submit">Add</button>
        </fieldset>
</form>
<form id="OpacityChange" action="./db/DeleteService.php" method="post" class="form-delete">
         <fieldset class="section is-active">
          <h3>Удалить</h3>
          <input type="text" name="Id" placeholder="Айди">
		  <button onclick="OpacityChange0()" class="button" type="submit">Delete</button>
        </fieldset>
</form>
</main>
<script src="./js/swup.min.js"></script>
<script src="./js/OpacityChanged.js"></script>
<script>
	const swup = new Swup();
</script>
<!--</content>-->

<?php /*include './pattern/footer.php';*/ ?> 

</body>
</html>
