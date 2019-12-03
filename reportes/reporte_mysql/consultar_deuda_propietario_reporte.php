<?php 



  $conn = new mysqli("localhost","root","","consorcio");


$codigo_dpto=$_REQUEST["codigo_dpto"];


$a_o=$_REQUEST["a_o"];


$sql="SELECT * FROM cobranza WHERE codigo_dpto=$codigo_dpto and a_o=$a_o order by meses ASC ";



  $query = $conn->query($sql);







?>


<div class="table-responsive" >
            <table class="table col-md-12">
                <tr >
                    
                    <th>Nª de Recibo</th>
                    
                   
                    <th>Mes</th>
                    <th>Monto</th>
                    <th>Paga</th>
                    <th>Accion</th>
                   
                </tr>
                <tr>
<?php  
  
           
             while (($fila=mysqli_fetch_array($query)))
                {
   
                
                 $recibo=$fila["numero_recibo"]
             
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
                 <td  >

                  <a href="../reportes/reporte_individual/imprimir_reporte_individual.php?recibo=<?php echo"".$recibo ?>" class="btn btn-success btn-sm"  id="reporte" data-toggle="modal" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-print"></span></a>
</td>
                  
          
        </tr>
    <?php } ?>
  
          </table>






<?php















?>