



<?php 
  
 $conn = new mysqli("localhost","root","","consorcio");
 


?>






<script type="text/javascript">
document.addEventListener('keypress', function(evt) {

  // Si el evento NO es una tecla Enter
  if (evt.key !== 'Enter') {
    return;
  }
  
  let element = evt.target;

  // Si el evento NO fue lanzado por un elemento con class "focusNext"
  if (!element.classList.contains('focusNext')) {
    return;
  }

  // AQUI logica para encontrar el siguiente
  let tabIndex = element.tabIndex + 1;
  var next = document.querySelector('[tabindex="'+tabIndex+'"]');

  // Si encontramos un elemento
  if (next) {
    next.focus();
    event.preventDefault();
  }
});

</script>


<script type="text/javascript">
$(document).ready(function(){
    $("#carga_dpto").on('shown.bs.modal', function(){
        $(this).find('#codigo_dpto').focus();
    });





});


</script>
















<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="carga_dpto" tabindex="-1" data-easein="expandIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Registrar Departamento44</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			


		<form  action="">


      
  
<div  id="cedula" class="form-group">
   <div class="row">

   

<div class="col-md-6">
    <label >Codigo del Dpto:</label>
 <input type="hidden" name="" id="codigo_dpto_final" class="form-control">
    <input   required type="text" hidden  name="codigo_dpto" id="codigo_dpto" class="form-control md-6   focusNext"  tabindex="20"  maxlength="50" placeholder="Codigo del Dpto"    >


   
    </div>

<script type="text/javascript">
  
</script>

    
    <div class="col-md-6">



    

<label >Nombre  del edificio:</label>
<div id="codigo_edificios">
      <select  class="form-control">
           <option value="">Nombre del Edificio</option>

    <?php 


  $conn = new mysqli("localhost","root","","consorcio");
 

$materia = "SELECT * FROM edificio";

  $queryMateria = $conn->query($materia);

     if (mysqli_num_rows($queryMateria) > 0 )
        {
             while (($fila=mysqli_fetch_array($queryMateria)))
               {

$codigo_edificio = $fila['codigo_edificio'];

$nombre_edificio=$fila['nombre_edificio'];

    echo "<option value='"."$codigo_edificio"."'>".$nombre_edificio."</option>";
               
               }  

               
        }



?>


           </select>

<script type="text/javascript">
$(document).ready(function() {


    //obtemos datos
 $("#codigo_edificios select").change(function() {

               

                      var codigo_dpto= $('#codigo_dpto').val();

        

                        var codigo_edificio= $('#codigo_edificios select').val();


                          $("#codigo_dpto_final").val(codigo_dpto.concat(codigo_edificio));

                          
                     


                     var codigo_dp =  $("#codigo_dpto_final").val();

                   


           
                     
                    });
});



</script>



    </div>




</div>
</div>









  
<div  id="cedula" class="form-group">
   <div class="row">

   

<div class="col-md-6">
   <label >DNI del Inquilino:</label>
      <input type="text" name="" id="inquilino" class="form-control" placeholder="DNI del Inquilino">

    </div>
    



    <div class="col-md-6">
   <label >DNI del Propietario:</label>

   <input type="text" name=""  id="propietario" class="form-control" placeholder="DNI del Propietario">
      

    </div>
</div>
</div>










    <div  id="cedula" class="form-group">

      <label >Estatus del Dpto. Alquilado o Desocupado:</label>
<br>
     <select name="alquilado" id="alquilado" class="form-control">
           <option value="desocupado">Desocupado</option>

            <option value="alquilado">Alquilado</option>


       </select>
    </div>





    <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Tamaño del Dpto:</label>

    <input   required type="text" name="tamano" id="tamano" class="form-control md-6   focusNext"  tabindex="20"  maxlength="50" placeholder="Tamaño del Dpto"    >
    </div>
    
    <div class="col-md-6">
     
<label >Expensa:</label>
    <input   required type="text" name="expensa" id="expensa" class="form-control  focusNext" tabindex="21"  maxlength="50" placeholder="Expensa"    >
    </div>
</div>
				
            <div class="modal-footer">
               
  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>


                <button type="button" name="add_dpto" id="add_dpto"    class="btn btn-primary focusNext" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>


            </div>

      
    



</form>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">





<div id="bodymodaldatos">   </div>

</div>










 <link rel="stylesheet" href="../css/sweetalert2.css" type="text/css" media="screen"/>

<script src="../js/sweetalert2.js"></script>




<script type="text/javascript">
   
  
$(document).ready(function() {

  
    //obtemos datos
$(document).on("click", "#add_dpto", function(){
  
   
    var codigo_dp =  $("#codigo_dpto_final").val();


 var codigo_edificio = $('#codigo_edificios select').val();




 var dni_i = $("#inquilino").val();

var dni_p = $("#propietario").val();

var alquilado = $("#alquilado").val();

var tamano = $("#tamano").val();
var expensa = $("#expensa").val();




 
    
    $.ajax({

        url: "../add/insertar_dpto.php",
        
        method: "POST",
        
        data: {
          codigo_dpto: codigo_dp,
           codigo_edificio: codigo_edificio,
           dni_i: dni_i,
           dni_p: dni_p,
           alquilado: alquilado,
           tamano: tamano,
           expensa: expensa
           
               
              },

        
        success: function(data){

    $('form :input').val('');

            if (data == 1 ) {
 
Swal.fire({
  position: 'top-end',
  type: 'error',
  title: 'Datos ya registrados anteriormente..!',
  showConfirmButton: false,
  timer: 2500
})
}

   if (data == 2 ) {
 
Swal.fire({
  position: 'top-end',
  type: 'success',
  title: 'Registro Exitoso..!',
  showConfirmButton: false,
  timer: 2500
})
}

            $("#carga_dpto").modal("hide");
     
  
        }
        
    })


})
// actualizardatos

});


</script>
 


<script type="text/javascript">





 $("#add_dpto").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.


          $('#add_i').click();
         
        

       }
    });




</script>