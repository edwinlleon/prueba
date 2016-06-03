<!-- desarrolado por: Edwin Leon 2016 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title></title>
</head>
<body>
<div id="contenedor">
<div id="div_form">
<center>
	<form action="guardar_registro.php" method="post">
		<li>Documento <input type="text" class="formulario" name="var1"></li>
		<br><br>
		<li>Nombre <input type="text" class="formulario" name="var2"></li>
		<br><br>
		<li>Fecha <input type="date" class="formulario"  name="var3"></li>
		<br><br>
		<input type="hidden" name="total" value="documento, nombre, fec_nacimiento">
		<br><br>
		<input type="hidden" name="tabla" value="tb_usuarios">
		<br><br>
		<input type="submit" name="" value="REGISTRAR">
	</form>
</center>
</div>
<?php 
include ('Clases/Graficos.php'); //se incluye el archivo Graficos.php que tiene las funciones a utilizar
// include ('clases_zoo.php');

$obj = new Graficos (); // se incicializa la clase


// echo $obj-> retornar_fecha();
echo $obj-> ini();
echo $obj-> escribir ("SELECT * FROM tb_persona");//se hace el llamado de la funcion escribir que esta en graficos.php
// echo $obj-> imprimir_titulo($obj->servidor);
// echo $obj-> imprimir_titulo($obj->usuario);
// echo $obj-> imprimir_titulo($obj->clave);
// echo $obj-> imprimir_titulo($obj->bd);
// echo $obj-> retornar_usuarios();
echo $obj-> insertar("tb_usuarios",[["1321600","documento"],["Mafsfsdrfia","nombre"],["2006-06-10","fec_nacimiento"]]);
echo "<br>";

 ?>
 </div>
</body>
</html>
