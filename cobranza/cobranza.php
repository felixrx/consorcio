<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cobranza</title>
</head>
<body>
	





<?php

error_reporting(0);

$dni_p='15727738';

$a_o='2018'


?> 
   
<?php 

 $mysqli= new mysqli("localhost","root","","consorcio");

$querybuscarh = $mysqli->query("SELECT * FROM cobranza WHERE dni_p ='$dni_p' and a_o='$a_o'");




    
      
        ?> 


<table border="2px" ">
<tr>
	<th>id</th>

     <th>DNI</th>
     <th>Codigo Dpto.</th>
     <th>Mes</th>
     <th>Monto</th>
     <th>Año</th>
     <th>Pago</th> 
     </tr>   
<tr>
	<?php



 if (mysqli_num_rows($querybuscarh) > 0 )
          {


while (($fila=mysqli_fetch_array($querybuscarh)))
                {
                    $id = $fila['id'];
                  $dni_p = $fila['dni_p'];
                  $codigo_dpto = $fila['codigo_dpto'];
                     $mes = $fila['mes'];
                       $monto = $fila['monto'];
                         $a_o = $fila['a_o'];
                           $paga = $fila['paga'];


?>
<td><?php echo "". $id = $fila['id']	 ?></td>
<td><?php echo "".$dni_p = $fila['dni_p'] ?></td>
<td><?php echo "".$codigo_dpto = $fila['codigo_dpto'] ?></td>
<td><?php echo "".$mes = $fila['mes'] ?></td>
<td><?php echo "".$monto = $fila['monto'] ?></td>
<td><?php echo "".$a_no = $fila['a_o'] ?></td>
<td><?php echo "".$paga = $fila['paga'] ?></td>
</tr>
<?php

 }
                 }

         
?>



</table>



</body>
</html>