




<?php 




$conn = new mysqli("localhost","root","","consorcio");

$query="SELECT * FROM departamento  WHERE id=".$_REQUEST["id"];
 $consultas = $conn->query($query);
     if (mysqli_num_rows($consultas) > 0 )
        {
        	
             while (($fila=mysqli_fetch_array($consultas)))
               {
	echo "<label>Expensa:</label>";

    echo '<input type="text" id="selector-expensa" name="selector-expensa" class="form-control" value="'.$fila["expensa"].'">';

}}
?>
