<?php 
include ('BD.php'); // se incluye el archivo BD.php en donde están las otras funciones a utilizar
class Graficos Extends BD // clase que heresa la clase BD que viene del archivo BD.php

 {


 	function Graficos() 
 	{
 			// $this->servidor="localhost";
 			// $this->usuario="root";
 			// $this->clave="clave";
 			// $this->bd="db";
 	} 

 	function imprimir_titulo ($titulo) //imprime un titulo cualquiera
 	{
 		
 		$titulo ="<p><h1>".$titulo."</h1></p>";

 		return $titulo;
 	}

 	function escribir ($s,$campo=null)  //trae las tablas y los registros que hayan en cualquier base de datos 
 	{
 		$r = $this-> retornar_usuarios($s);
 		
 		echo "<table id='tabla_registros' >";// Tabla para organizar las filas

 		while ($fila=mysqli_fetch_array($r)) // ciclo para traer las filas
 		{
 			echo "<tr>";

 			for ($i=1; $i <mysqli_num_fields($r); $i++) // ciclo para traer numero de columnas
 			 { 
 				
 				
 				echo "<td style='border: 2px double'>".$fila[$i]."</td>"; //se muestra todos los registros que existan en la tabla
 			
 						
 			}
 			echo "</tr>"; //cerrado del tr de la tabla


 			

 		}
 		echo "</table>";
 		//echo mysqli_num_fields($r);
 	}

	// function escribir2 ($s,$campo=null) 
 // 	{
 // 		$r = $this-> retornar_usuarios($s);
 		
 // 		echo "<table style='border: 2px double'>";// Tabla para organizar las filas

 // 		while ($fila=mysqli_fetch_array($r)) // ciclo para traer las filas
 // 		{
 // 			echo "<tr>";

 // 			for ($i=0; $i <$campo; $i++) // ciclo para traer numero de columnas
 // 			 { 
 				
 				
 // 				echo "<td style='border: 2px double'>".$fila[$i]."</td>";
 				
 						
 // 			}
 // 			echo "</tr>";


 			

 // 		}
 // 		echo "</table>";
 // 		 echo mysqli_num_fields($r);
 // 	}






}












 ?>