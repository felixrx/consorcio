



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
    $("#carga_inquilino").on('shown.bs.modal', function(){
        $(this).find('#dni_i').focus();
    });





});


</script>
















<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="carga_inquilino" tabindex="-1" data-easein="expandIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Registrar Inquilino</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			


		<form  action="">


      
    <div  id="cedula" class="form-group">

      <label >DNI:</label>
<br>
    <input   required type="text" name="dni_i"  id="dni_i" class="form-control focusNext" tabindex="15"  maxlength="50" placeholder="DNI"    >
    </div>


    <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Nombre:</label>

    <input   required type="text" name="nombre_i" id="nombre_i" class="form-control md-6 focusNext"  tabindex="16"  maxlength="50" placeholder="Nombre"    >
    </div>
    
    <div class="col-md-6">
     
<label >Apellido:</label>
    <input   required type="text" name="apellido_i" id="apellido_i" class="form-control focusNext" tabindex="17"  maxlength="50" placeholder="Apellido"    >
    </div>
</div>
</div>



    <div  id="cedula" class="form-group">

      <label >Domicilio:</label>
<br>
    <input   required type="text" name="domicilio_i" id="domicilio_i" class="form-control focusNext" tabindex="18"  maxlength="50" placeholder="Domicilio"    >
    </div>


    <div  id="cedula" class="form-group">

      <label >Email:</label>
<br>
    <input   required type="text" name="email_i" id="email_i" class="form-control focusNext"tabindex="19"  maxlength="50" placeholder="Email"    >
    </div>





    <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Telefono (fijo):</label>

    <input   required type="text" name="telefono_i" id="telefono_i" class="form-control md-6   focusNext"  tabindex="20"  maxlength="50" placeholder="Telefono (fijo)"    >
    </div>
    
    <div class="col-md-6">
     
<label >Telefono (movil):</label>
    <input   required type="text" name="telefono_m_i" id="telefono_m_i" class="form-control  focusNext" tabindex="21"  maxlength="50" placeholder="Telefono (movil)"    >
    </div>
</div>
				
            <div class="modal-footer">
               
  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>


                <button type="button" name="add_i" id="add_i"    class="btn btn-primary focusNext" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>


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
$(document).on("click", "#add_i", function(){
  
    var dni_i = $("#dni_i").val();
    var nombre_i = $("#nombre_i").val();
    var apellido_i = $("#apellido_i").val();
    var domicilio_i = $("#domicilio_i").val();
    var email_i = $("#email_i").val();
    var telefono_i = $("#telefono_i").val()
    var telefono_m_i = $("#telefono_m_i").val();
    
    $.ajax({

        url: "../add/insertar_inquilino.php",
        
        method: "POST",
        
        data: {
          dni_i: dni_i,
           nombre_i: nombre_i,
            apellido_i: apellido_i,
             domicilio_i: domicilio_i,
              email_i: email_i,
               telefono_i: telefono_i,
            telefono_m_i: telefono_m_i
               
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

            $("#carga_inquilino").modal("hide");
     
  
        }
        
    })


})
// actualizardatos

});


</script>
 


<script type="text/javascript">





 $("#telefono_m_i").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.


          $('#add_i').click();
         
        

       }
    });




</script>