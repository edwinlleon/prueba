<?php 
include ('Clases/Graficos.php');


$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$var3 = $_POST['var3'];
$total = $_POST['total'];
$tabla = $_POST['tabla'];



$arreglo = explode(",", $_POST['total']);
// print_r($arreglo);
// echo count($arreglo);
	for ($i=0; $i < count($arreglo) ; $i++)
 	{ 
	
 	$a="var".($i+1);
	$campo[$i][0] =  $_POST[$a];
	$campo[$i][1] = $arreglo[$i];
	// $campo[$i][2] = $_POST['var'+$i];


	}	
print_r($campo);

$obj = new Graficos (); // se incicializa la clase


// echo $obj-> retornar_fecha();
echo $obj-> ini();
echo $obj-> insertar ($_POST['tabla'],$campo);
 ?>