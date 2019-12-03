<?php 


  $conn = new mysqli("localhost","root","","consorcio");


$Codigo_Gastos=$_POST['Codigo_Gastos'];

$sql="SELECT  *  FROM productos   where Codigo_Gastos='$Codigo_Gastos'";


  $query = $conn->query($sql);





?>


<div class="table-responsive" style=" margin-top: 20px;" >
            <table class="table col-md-12">
                <tr >
                    
                  <div class="col-md-12"  style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;  border-radius: 10px 10px 0px 0px;">

<div class="float-left col-heading"  > Descripcion</div>
<div class="float-left col-heading2" style=" margin-left:150px; " > Cant.</div>
<div class="float-left col-heading2" style="margin-left: 30px; " > Precio</div>
<div class="float-left col-heading2" style=" margin-left:40px;"> Sub-Total</div>
</div>

                   
                </tr>
                <tr>
<?php  
  
              while (($fila=mysqli_fetch_array($query)))
                {
   
                $fila["descripcion"];
             
            $fila["cantidad"];
             $fila["subTotal"];
              
?>
                





                 <td  style=" width: 260px; margin-left: 0px; margin-right: 0px;" >
                 	<div class="float-left" style="padding-left: 0px; padding-right: 0px;">
                 	<input class="form-control"   type="text"   value='<?php echo "".$fila["descripcion"]?>' name="Codigo_Gastos[]" style="width:120%; "/>
                 </div>
             </td>
                  
                     <td style="width: 50px;" >
                     	<div>
                     		<input class="form-control" type="text" id="cantidad" name="cantidad[]" value='<?php echo "".$fila["cantidad"]?>' style="width:50px;"/>
                     	</div>
                     </td>
            
                        <td style=" width: 70px; margin-left: 0px; margin-right: 0px;"  >
                        	<div class="">
                        	<input class="form-control" type="text" id="pro_precio" name="pro_cantidad[]" value='<?php echo "".$fila["precio"]?>' style="width:70px;"/>
                        </div>
                    </td>

                          <td  >
                          	<div class="">
                          		<input class="form-control" type="text" id="pro_cantidad" name="pro_cantidad[]" value='<?php echo "".$fila["subTotal"]?>' style="width:100px;"/>
                          	</div>
                          </td>

               
</td>
                  
          
        </tr>
    <?php } ;?>
  
          </table>




<?php


 

  $Codigo_Gastos=$_POST['Codigo_Gastos'];


$sql="SELECT DISTINCT gran_total FROM productos  where Codigo_Gastos='$Codigo_Gastos'";


 $query = $conn->query($sql);


  while (($fila=mysqli_fetch_array($query)))
                {
   
                
                 $recibo=$fila["gran_total"];
             
            $fila["gran_total"];
           


?>
   <td  >
    <div >
      <div style=" width: 500px; height: 50px; float: right; margin-right: 20px;">
        <div style=" float:right;"><input class="form-control" type="text" id="pro_cantidad" name="pro_cantidad[]" value='<?php echo "".$fila["gran_total"]?>' style="width:100px;"/>
          
        </div>
        
          <div style=" width: 100px; height: 50px; float: right;"><h4 style="float: right;">Total: $</h4></div>
          <div style="width: 100px; height: 50px; float: left;"> <a href="../gastos/reportesGastos/reporte_general_por_a_os_pdf.php?Codigo_Gastos=<?php echo"".$Codigo_Gastos ?>" class="btn btn-success btn-sm"  id="reporte" data-toggle="modal" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-print"></span> Imprimir</a> </div>
          
        
      </div>
    </div>
  </td>
<?php

         };


?>

