

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
    $("#addnew").on('shown.bs.modal', function(){
        $(this).find('#codigo_edificio').focus();
    });





});


</script>


<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" data-easein="expandIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Nuevo Edificio</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">


			<form>

  <div   class="form-group">
  <div class="row">
    

 <div class="col-md-6">
		 

      <label >Codigo del Edificio:</label>
<br>
    <input required  type="text" name="codigo_edificio" id="codigo_edificio"  class="form-control focusNext" tabindex="1"  maxlength="50" placeholder="Codigo"  required>
    </div>



   

 <div class="col-md-6">
      <label >Nombre del Edificio:</label>
<br>
    <input required   type="text" name='nombre_edificio' id='nombre_edificio'  tabindex="2" class="form-control focusNext"  maxlength="50" placeholder="Nombre del Edificio"    >
    </div>

</div>
		</div>



    <div  id="cedula" class="form-group">

      <label >Domicilio:</label>
<br>
    <input    type="text" name="domicilio" id="domicilio" class="form-control focusNext"  tabindex="3"  maxlength="50" placeholder="Domicilio"    >
    </div>




    <div   class="form-group">


      <div class="row">
    

 <div class="col-md-3">
     

      <label >Telefono:</label>
<br>
    <input    type="text" name="telefono_edificio" id="telefono_edificio" class="form-control focusNext"  tabindex="4"  maxlength="50" placeholder="Telefono"    >
    </div>



<div class="col-md-3">

      <label >Nº de Pisos:</label>
<br>
    <input    type="number" name="cantidad_de_pisos" id="cantidad_de_pisos"   tabindex="5"  class="form-control focusNext"  maxlength="50" placeholder="Nº de Pisos"    >
    </div>


<div class="col-md-3">
 <label >Nº de Dptos.:</label>
<br>
    <input    type="number" name="cantidad_de_dpto" id="cantidad_de_dpto" tabindex="6"  class="form-control focusNext"  maxlength="50" placeholder="Nº de Dptos.:"    >
    
</div>

<div class="col-md-3" id="tipo_de_expensa" >

      <label >Expensa:</label>
<br>


<select name="tipo_de_expensa" class="form-control" >
  
  <option value="Fija">Fija</option>
  <option value="Movil">Movil</option>
</select>
   
    </div>

</div>

</div>





				
            <div class="modal-footer">
               

  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>


                <button type="button" name="add" id="add"    class="btn btn-primary focusNext" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
                


         
			</form>
            </div>



           

        </div>
    </div>
</div>
  <link rel="stylesheet" href="../css/sweetalert2.css" type="text/css" media="screen"/>

<script src="../js/sweetalert2.js"></script>
<script type="text/javascript">
   
  
$(document).ready(function() {

  
    //obtemos datos
$(document).on("click", "#add", function(){
  
    var codigo_edificio = $("#codigo_edificio").val();
     var nombre_edificio = $("#nombre_edificio").val();
   var domicilio = $("#domicilio").val();
    var telefono_edificio = $("#telefono_edificio").val();
     var cantidad_de_pisos = $("#cantidad_de_pisos").val();
     var cantidad_de_dpto = $("#cantidad_de_dpto").val();
     var tipo_de_expensa = $("#tipo_de_expensa select").val();

   
    $.ajax({

        url: "../add/insertar_edificio.php",
        
        method: "POST",
        
        data: {
          codigo_edificio: codigo_edificio,
          nombre_edificio: nombre_edificio,
          domicilio: domicilio,
          telefono_edificio : telefono_edificio,
          cantidad_de_pisos:cantidad_de_pisos,
          cantidad_de_dpto: cantidad_de_dpto,
          tipo_de_expensa: tipo_de_expensa

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

            $("#addnew").modal("hide");
     
  
        }
        
    })


})
// actualizardatos

});


</script>
 


<script type="text/javascript">





 $("#tipo_de_expensa").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.


          $('#add').click();
         
        

       }
    });




</script>