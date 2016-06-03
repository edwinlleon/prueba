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

	
	
	$sql= "INSERT INTO ".$tabla.  " ( ".$campo[0][1]. ","   .$campo[1][1]. ",".$campo[2][1].")";

	$sql.= " VALUES"."("."'".$campo[0][0]."'".","."'".$campo[1][0]."'".","."'".$campo[2][0]. "'". ")"; 
	echo count($campo)."<br>";
	//echo $sql;
	

	$tabla = "INSERT INTO ".$tabla." (";
	$cam = "(";

	for ($i=0; $i < count($campo) ; $i++) { 

	
		 $tabla.=  $campo[$i][1].",";
		
		$cam.= "'" .$campo[$i][0]."'".",";

	
	}

$coma = substr($tabla, 0,-1);
$coma1 = substr($cam,0,-1);


	// echo $campo[0][0];
	// echo $campo[0][1];
	// echo $campo[1][0];
	// echo $campo[1][1];
	// echo $campo[2][0];
	// echo $campo[2][1];


	return $coma.") VALUES ".$coma1.")";
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