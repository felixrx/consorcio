

<?php





$dni_i=$_POST['dni_i'];
$nombre_i=$_POST['nombre_i'];
$apellido_i=$_POST['apellido_i'];
$domicilio_i=$_POST['domicilio_i'];
$email_i=$_POST['email_i'];
$telefono_i=$_POST['telefono_i'];
$telefono_m_i=$_POST['telefono_m_i'];


?>


<?php

  $conn = new mysqli("localhost","root","","consorcio");

$sql = "SELECT * FROM inqulino WHERE dni_i ='$dni_i'";
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


 $queryInsertar2 = $conn->query("INSERT INTO inqulino (id, dni_i,nombre_i,apellido_i,domicilio_i,email_i,telefono_i,telefono_m_i) values 
                ( null, '$dni_i','$nombre_i','$apellido_i','$domicilio_i','$email_i','$telefono_i','$telefono_m_i')");

   


          $resuls = '2';                   
           echo "$resuls";





            # code...
          }



?>


