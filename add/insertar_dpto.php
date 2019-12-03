

<?php





$codigo_dpto=$_POST['codigo_dpto'];

$codigo_edificio=$_POST['codigo_edificio'];
$dni_i=$_POST['dni_i'];
$dni_p=$_POST['dni_p'];
$alquilado=$_POST['alquilado'];

$tamano=$_POST['tamano'];
$expensa=$_POST['expensa'];

?>


<?php

  $conn = new mysqli("localhost","root","","consorcio");

$sql = "SELECT * FROM departamento WHERE codigo_dpto ='$codigo_dpto'";
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


 $queryInsertar2 = $conn->query("INSERT INTO departamento (id, codigo_dpto,codigo_edificio,dni_i,dni_p,alquilado,tamano,expensa) values 
                ( null, '$codigo_dpto','$codigo_edificio','$dni_i','$dni_p','$alquilado','$tamano','$expensa')");

   


          $resuls = '2';                   
           echo "$resuls";





            # code...
          }



?>


