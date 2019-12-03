<?php 



  $conn = new mysqli("localhost","root","","consorcio");

$querys="SELECT * FROM meses";
 $consultas = $conn->query($querys);
     if (mysqli_num_rows($consultas) > 0 )
        {
        	echo '<option value="0">Seleccionar</option>';
             while (($fila=mysqli_fetch_array($consultas)))
               {

    echo '<option value="'.$fila["id"].'">'.$fila["meses"].'</option>';
}
}
?>