





<?php

error_reporting(0);

$codigo_edificios=$_POST['codigo_edificios'];




?> 
   
<?php 

 $conn = new mysqli("localhost","root","","consorcio");

$sql = "SELECT * FROM edificio where codigo_edificio='$codigo_edificios' ";
    $query = $conn->query($sql);
       if (mysqli_num_rows($query) > 0 )
          {
             while (($fila=mysqli_fetch_array($query)))
                {
                   
                  $codigo_edificio = $fila['codigo_edificio'];
                   $nombre_edificio = $fila['nombre_edificio'];
                    $domicilio = $fila['domicilio'];  
                     $telefono_edificio = $fila['telefono_edificio'];  
                      $cantidad_de_pisos = $fila['cantidad_de_pisos']; 
                       $cantidad_de_dpto = $fila['cantidad_de_dpto'];  

                         $tipo_de_expensa = $fila['tipo_de_expensa'];  


                 }

?>




<?php 

?>



<div class="modal fade" id="myModaldatos" style="  "  data-easein="expandIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;">Consulta  edificio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <form method="POST" action="../modificar/modificar_edificio.php">

  <div   class="form-group">
  <div class="row">
    

 <div class="col-md-6">
     

      <label >Codigo del Edificio:</label>
<br>
    <input required  type="text" name="codigo_edificios" id="codigo_edificios_m"  class="form-control focusNext" tabindex="1"  maxlength="50" value="<?php echo "".$codigo_edificio ?>">
    </div>



   

 <div class="col-md-6">
      <label >Nombre del Edificio:</label>
<br>
    <input required   type="text" name='nombre_edificio' id='nombre_edificio_m'  tabindex="2" class="form-control focusNext"  maxlength="50" value="<?php echo "".$nombre_edificio ?>"   >
    </div>

</div>
    </div>



    <div  id="cedula" class="form-group">

      <label >Domicilio:</label>
<br>
    <input    type="text" name="domicilio" id="domicilio_m" class="form-control focusNext"  tabindex="3"  maxlength="50" value="<?php echo "".$domicilio ?>"    >
    </div>




    <div   class="form-group">


      <div class="row">
    

 <div class="col-md-3">
     

      <label >Telefono:</label>
<br>
    <input    type="text" name="telefono_edificio" id="telefono_edificio_m" class="form-control focusNext"  tabindex="4"  maxlength="50" value="<?php echo "".$telefono_edificio ?>"    >
    </div>



<div class="col-md-3">

      <label >Nº de Pisos:</label>
<br>
    <input    type="number" name="cantidad_de_pisos" id="cantidad_de_pisos_m"   tabindex="5"  class="form-control focusNext"  maxlength="50" value="<?php echo "".$cantidad_de_pisos ?>"    >
    </div>


<div class="col-md-3">
 <label >Nº de Dptos.:</label>
<br>
    <input    type="number" name="cantidad_de_dpto" id="cantidad_de_dpto_m" tabindex="6"  class="form-control focusNext"  maxlength="50" value="<?php echo "".$cantidad_de_dpto ?>"   >
    
</div>

<div class="col-md-3" id="tipo_de_expensa" >

      <label >Expensa:</label>
<br>


<select name="tipo_de_expensa_m" id="tipo_de_expensa_m" class="form-control" >


  
  <option value="<?php echo "".$tipo_de_expensa ?>" ><?php echo "".$tipo_de_expensa ?></option>
 <option value="movil" >Movil</option>
 <option value="fija" >Fija</option>

 
</select>
   
    </div>

</div>

</div>

          

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon glyphicon glyphicon-remove"></span>Cerrar</button>
        <button type="button" id="modificar_edificio" class="btn btn-primary" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-refresh"></span>    Actualizar</button>
      </div>
    </div>
  </div>
</div>

</form>


<?php

}


else {




 ?>
 




<?php 
}

?>



 <link rel="stylesheet" href="../css/sweetalert2.css" type="text/css" media="screen"/>

<script src="../js/sweetalert2.js"></script>

<script>
 

 
$(document).ready(function() { 


    
    $('#modificar_edificio').click(function(){

  var  codigo_edificios_m= $('#codigo_edificios_m').val();


  var  nombre_edificio= $('#nombre_edificio_m').val();

 var  domicilio_m= $('#domicilio_m').val();




  var  telefono_edificio_m= $('#telefono_edificio_m').val();



   var  cantidad_de_pisos_m= $('#cantidad_de_pisos_m').val();



var  cantidad_de_dpto_m= $('#cantidad_de_dpto_m').val();
 
var  tipo_de_expensa_m= $('#tipo_de_expensa_m').val();





alert(tipo_de_expensa_m);

     //Si se hace click en enviar cedula
        $.ajax({
            type: "POST",
            url: "../modificar/modificar_edificio.php", //Mando a ajaxdatos.php
            data: {codigo_edificios: $('#codigo_edificios_m').val(),
                    nombre_edificio:$('#nombre_edificio_m').val(),
                    domicilio_m:$('#domicilio_m').val(),
                    telefono_edificio_m: $('#telefono_edificio_m').val(),
                     cantidad_de_pisos_m: $('#cantidad_de_pisos_m').val(),
                      cantidad_de_dpto_m: $('#cantidad_de_dpto_m').val(),
                      tipo_de_expensa_m: $('#tipo_de_expensa_m').val()}, //La cedula
            success: function(data) {

  


                   if (data == 1 )      {


    

                
 
Swal.fire({


  position: 'top-end',
  type: 'success',
  title: 'Registro actualizado..!',
  showConfirmButton: false,
  timer: 2500
});
};
   
   
}});





  });
 });
  
 


 
</script>