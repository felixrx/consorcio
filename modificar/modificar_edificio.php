


<?php

$mysqli = new mysqli("localhost", "root", "", "consorcio");

$codigo_edificio = $_POST['codigo_edificios'];
$nombre_edificio = $_POST['nombre_edificio'];
			
$domicilio_m = $_POST['domicilio_m'];
$telefono_edificio_m= $_POST['telefono_edificio_m'];

 $cantidad_de_pisos_m= $_POST['cantidad_de_pisos_m'];

  $cantidad_de_dpto_m= $_POST['cantidad_de_dpto_m'];

  $tipo_de_expensa_m= $_POST['tipo_de_expensa_m'];

mysqli_query($mysqli,   "UPDATE edificio SET nombre_edificio ='$nombre_edificio', domicilio='$domicilio_m',telefono_edificio='$telefono_edificio_m', cantidad_de_pisos='$cantidad_de_pisos_m', cantidad_de_dpto='$cantidad_de_dpto_m', tipo_de_expensa='$tipo_de_expensa_m' WHERE codigo_edificio ='$codigo_edificio'");

$resuls=1;

echo "".$resuls;



	
	?>