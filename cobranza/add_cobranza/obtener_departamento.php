<?php 



$conn = new mysqli("localhost","root","","consorcio");





$query="SELECT * FROM departamento  WHERE dni_p=".$_REQUEST["dni_p"];



 $consulta = $conn->query($query);
     if (mysqli_num_rows($consulta) > 0 )
        {
        	echo '<option value="0">Seleccionar</option>';
             while (($fila=mysqli_fetch_array($consulta)))
               {



    echo '<option value="'.$fila["id"].'">'.$fila["codigo_dpto"].'</option>';
}
}

?>