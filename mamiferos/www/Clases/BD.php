<?php 
class BD // nombre que se le da a la clase donde están estas funciones

 {
 // se declaran publicas las varible de  conexion
 	public $servidor;  
 	public $usuario;
 	public $clave;
 	public $bd;

 	function BD()
 	{

 			
 	} 
 	function ini ()
 	{	
 		include ('config.php'); //se incluye el archivo de config.php

 			$this->servidor = $servidor;
 			$this->usuario = $usuario;
 			$this->clave = $clave;
 			$this->bd = $bd;
 	}

 	function retornar_fecha () //retorna la fecha del sistema
 	{
 		$fecha = date("y-m-d");


 		return $fecha;
 	}

 	function retornar_usuarios ($s)//retorna los registros de usuarios de una tabla
 	
 	{

 	$con = $this-> conectar();
 	
 	$sql= $s;
 	// echo $this->bd;
 	
 	$resultado = $con->query ($sql);

 	return $resultado;
 	
    }

    function conectar () //funcion de conexion 
    {

    	return mysqli_connect($this->servidor, $this->usuario,  $this->clave,  $this->bd );
    }
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


}

 ?>