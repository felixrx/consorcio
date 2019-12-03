<?php 



  $conn = new mysqli("localhost","root","","consorcio");

$query="SELECT * FROM a_o";



 $consulta = $conn->query($query);
     if (mysqli_num_rows($consulta) > 0 )
        {
        	echo '<option value="0">Seleccionar</option>';
             while (($fila=mysqli_fetch_array($consulta)))
               {



    echo '<option value="'.$fila["id_a_o"].'">'.$fila["a_o"].'</option>';
}
// Liberar resultados
};