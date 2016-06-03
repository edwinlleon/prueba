<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
include ('Clases/clases_mamiferos.php');
// include ('clases_zoo.php');

$obj_animales = new clases_mamiferos ();


echo $obj_animales-> retornar_dato();
echo "<br>";
echo $obj_animales-> imprimir();
// $obj_animales-> retornar_dato();







 ?>
</body>
</html>
