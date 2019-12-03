<?php 
$mysqli = new mysqli("localhost", "root", "", "consorcio");
if ($mysqli->connect_error)
{
	die ('ERROR: No se establecio la conexion.'.mysqli_connect_error());
}
 ?>
