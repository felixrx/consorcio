

<?php





$numero_recibos=$_POST['num'];
$dni_p=$_POST['dni_p'];
$codigo_dpto=$_POST['codigo_dpto'];
$meses=$_POST['mes'];

$monto=$_POST['monto'];


$a_o=$_POST['a_o'];


$paga=$_POST['paga'];
$paga=$_POST['paga'];
?>


<?php

  $conn = new mysqli("localhost","root","","consorcio");

$sql = "SELECT * FROM cobranza WHERE numero_recibo ='$numero_recibos'";
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


 $queryInsertar2 = $conn->query("INSERT INTO cobranza (id, numero_recibo,dni_p,codigo_dpto,meses,monto,a_o,paga) values 
                ( null, '$numero_recibos','$dni_p','$codigo_dpto','$meses','$monto','$a_o','$paga')");

   


          $resuls = '2';                   
           echo "$resuls";





            # code...
          }



?>


