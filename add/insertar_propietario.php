

<?php



error_reporting(0);


$dni_p=$_POST['dni_p'];
$nombre_p=$_POST['nombre_p'];
$apellido_p=$_POST['apellido_p'];
$domicilio_p=$_POST['domicilio_p'];
$email_p=$_POST['email_p'];
$telefono_f_p=$_POST['telefono_f_p'];
$telefono_m_p=$_POST['telefono_m_p'];


?>


<?php

  $conn = new mysqli("localhost","root","","consorcio");

$sql = "SELECT * FROM propietario WHERE dni_p ='$dni_p'";
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



             $queryInsertar2 = $conn->query("INSERT INTO propietario (id, dni_p,nombre_p,apellido_p,domicilio_p,email_p,telefono_f_p,telefono_m_p) values 
                ( null, '$dni_p', '$nombre_p', '$apellido_p', '$domicilio_p', '$email_p', '$telefono_f_p', '$telefono_m_p')");

   


          $resuls = '2';                   
           echo "$resuls";





            # code...
          }



?>


