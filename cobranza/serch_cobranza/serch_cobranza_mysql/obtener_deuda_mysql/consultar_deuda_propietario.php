<?php 

 $conn = new mysqli("localhost","root","","consorcio");



$codigo_dpto=$_REQUEST["codigo_dpto"];


$a_o=$_REQUEST["a_o"];


$query="SELECT * FROM cobranza WHERE codigo_dpto=$codigo_dpto and a_o=$a_o order by meses ASC ";
 $consultas = $conn->query($query);







?>


<div class="table-responsive" >
            <table class="table col-md-12">
                <tr >
                    
                    <th>Nª de Recibo</th>
                    
                   
                    <th>Mes</th>
                    <th>Monto</th>
                    <th>Paga</th>
                   
                </tr>
                <tr>
<?php  
   while (($fila=mysqli_fetch_array($consultas)))
               {
                 
             
?>
                 <td  ><?php echo "".$fila["numero_recibo"]?></td>
                  
          
            
             
               <td  ><?php if ($fila["meses"]==1){echo "Enero";};

               if ($fila["meses"]==2){echo "Febrero";};
               if ($fila["meses"]==3){echo "Marzo";};
                if ($fila["meses"]==4){echo "Abril";}; 
                 if ($fila["meses"]==5){echo "Mayo";}; 
                  if ($fila["meses"]==6){echo "Junio";}; 
                   if ($fila["meses"]==7){echo "Julio";}; 
                    if ($fila["meses"]==8){echo "Agosto";}; 
                     if ($fila["meses"]==9){echo "Septiembre";};
                    if ($fila["meses"]==10){echo "Octubre";}; 
                   if ($fila["meses"]==11){echo "Noviembre";}; 
                  if ($fila["meses"]==12){echo "Diciembre";};  ?></td>
                <td  ><?php echo "".$fila["monto"]?></td>
                 <td  ><?php echo "".$fila["paga"]?></td>
                  
          
        </tr>
    <?php } ?>
  
          </table>





