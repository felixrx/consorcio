<?php 





  $conn = new mysqli("localhost","root","","consorcio");


$fecha_mes=$_POST['fecha_mes'];
$fecha_a_o=$_POST['fecha_a_o'];
$edificio_gastos=$_POST['edificio_gastos'];



$sql="SELECT DISTINCT Codigo_Gastos FROM productos where fecha_mes='$fecha_mes' and fecha_a_o='$fecha_a_o' and edificio_gastos='$edificio_gastos'";





$query = $conn->query($sql);
       if (mysqli_num_rows($query) > 0 )
          {

echo '<option value="0">Seleccionar</option>';
    
             while (($fila=mysqli_fetch_array($query)))
                {
   




    echo '<option value="'.$fila["Codigo_Gastos"].'">'.$fila["Codigo_Gastos"].'</option>';
};
}

?>








