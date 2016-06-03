<?php 
//Realizado por Edwin Leon  /2016
/*
*	funcion encargada de insertar datos en  cualquier tipo de tabla 
*
*
**/

function insertar ($tabla, $campo) 

{

	$respuesta = "";
	
	echo count($campo)."<br>";
	
	$sql= "INSERT INTO ".$tabla.  "(".$campo[0][1]. ","   .$campo[1][1]. ",".$campo[2][1].")";

	$sql.= " VALUES"."("."'".$campo[0][0]."'".","."'".$campo[1][0]."'".","."'".$campo[2][0]. "'". ")"; 
	
	echo $sql;
	// echo $campo[0][0];
	// echo $campo[0][1];
	// echo $campo[1][0];
	// echo $campo[1][1];
	// echo $campo[2][0];
	// echo $campo[2][1];


	return $respuesta;
}

	echo insertar("tb_usuarios",[["12000","documento"],["Maria","nombre"],["2016-06-10","fec_nacimiento"]]);


// function insertar ($tabla, $campos) 

// {
// 	include ('config.php');

// 	$respuesta = "";

	// $sql= "SELECT * FROM $tabla"
	// $sql= "NSERT INTO $tabla ('documento', 'nombre', 'fec_nacimiento')"; //variable $sql para hacer el insert de la tabla
	// $sql.="VALUES ($documento, $nombre, '$fec_nacimiento')";	
	
	// $respuesta=mysql_query($sql,$conectar) 

	// while($reg=mysql_fetch_array($res)) { 

	// insert into nombreTabla (campo,campo2,campo3) 

	// values ($reg["uno"],$reg["dos"],$reg["3"]) 
    // }
 


// 	return $respuesta;
// }

 ?>