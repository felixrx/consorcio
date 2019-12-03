

<?php






$codigo_edificio=$_POST['codigo_edificio'];
$nombre_edificio=$_POST['nombre_edificio'];
$domicilio=$_POST['domicilio'];
$telefono_edificio=$_POST['telefono_edificio'];
$cantidad_de_pisos=$_POST['cantidad_de_pisos'];
$cantidad_de_dpto=$_POST['cantidad_de_dpto'];
$tipo_de_expensa=$_POST['tipo_de_expensa'];

?>


<?php

  $conn = new mysqli("localhost","root","","consorcio");

$sql = "SELECT * FROM edificio WHERE codigo_edificio ='$codigo_edificio'";
    $query = $conn->query($sql);
       if (mysqli_num_rows($query) > 0 )
          {
             while (($fila=mysqli_fetch_array($query)))
                {
                   
                    
                 }


          $resuls = '1';                   
           echo "$resuls";

          
          }
          else {



             $queryInsertar2 = $conn->query("INSERT INTO edificio (id, codigo_edificio, nombre_edificio,domicilio,telefono_edificio,cantidad_de_pisos,cantidad_de_dpto,tipo_de_expensa) values 
                ( null, '$codigo_edificio','$nombre_edificio','$domicilio','$telefono_edificio','$cantidad_de_pisos','$cantidad_de_dpto','$tipo_de_expensa')");

   


          $resuls = '2';                   
           echo "$resuls";


            # code...
          }



?>

