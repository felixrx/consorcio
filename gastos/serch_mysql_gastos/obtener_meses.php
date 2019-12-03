<?php 




  $conn = new mysqli("localhost","root","","consorcio");



$sql="SELECT * FROM meses";


   $query = $conn->query($sql);
       if (mysqli_num_rows($query) > 0 )
          {

echo '<option value="0">Seleccionar</option>';
    
             while (($fila=mysqli_fetch_array($query)))
                {


    echo '<option value="'.$fila["meses"].'">'.$fila["meses"].'</option>';
}

}
?>