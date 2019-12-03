





 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css'>
<link rel="stylesheet" href="style.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js'></script>
<script src='https://www.jqueryscript.net/demo/Mobile-friendly-Custom-Scrollbar-Plugin-With-jQuery-NiceScroll/js/jquery.nicescroll.min.js'></script>
<script  src="./script.js"></script>

<?php 


  $conn = new mysqli("localhost","root","","consorcio");


      	                echo '

<select id="sele" >
<option >Edificios</option>
 <option value="2">Registrar Edificio</option>
 <option value="3">Registrar Dpto.</option>
 <option value="4">Registrar Propietario</option>
  <option value="5">Registrar Inquilino</option>




';
$sql = "SELECT * FROM edificio";
    $query = $conn->query($sql);
       if (mysqli_num_rows($query) > 0 )
          {


    
             while (($fila=mysqli_fetch_array($query)))
                {
   
  



    echo '<option  value="'.$fila["codigo_edificio"].'">'.'Cod.'.$fila["codigo_edificio"].'-'.$fila["nombre_edificio"].'</option>  ';
                    
                 }

}
// Liberar resultados


// Cerrar la conexión


?> 