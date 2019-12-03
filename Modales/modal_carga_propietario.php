



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
    $("#carga_propietrio").on('shown.bs.modal', function(){
        $(this).find('#dni_p').focus();
    });





});


</script>







<div class="container">









<!-- Agregar Nuevos Registros -->
 <div id="carga_propietrio" class="modal" data-easein="expandIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog   " >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-easein="expandIn" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Registrar propietario</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			</div>


		<form  action="">


      
    <div  id="cedula" class="form-group">

      <label >DNI:</label>
<br>
    <input   required type="text" name="dni_p"  id="dni_p" class="form-control focusNext" tabindex="8"  maxlength="50" placeholder="DNI"    >
    </div>


    <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Nombre:</label>

    <input   required type="text" name="nombre_p" id="nombre_p" class="form-control md-6 focusNext"  tabindex="9"  maxlength="50" placeholder="Nombre"    >
    </div>
    
    <div class="col-md-6">
     
<label >Apellido:</label>
    <input   required type="text" name="apellido_p" id="apellido_p" class="form-control focusNext" tabindex="10"  maxlength="50" placeholder="Apellido"    >
    </div>
</div>
</div>



    <div  id="cedula" class="form-group">

      <label >Domicilio:</label>
<br>
    <input   required type="text" name="domicilio_p" id="domicilio_p" class="form-control focusNext" tabindex="11"  maxlength="50" placeholder="Domicilio"    >
    </div>


    <div  id="cedula" class="form-group">

      <label >Email:</label>
<br>
    <input   required type="text" name="email_p" id="email_p" class="form-control focusNext"tabindex="12"  maxlength="50" placeholder="Email"    >
    </div>





    <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Telefono (fijo):</label>

    <input   required type="text" name="telefono_f_p" id="telefono_f_p" class="form-control md-6   focusNext"  tabindex="13"  maxlength="50" placeholder="Telefono (fijo)"    >
    </div>
    
    <div class="col-md-6">
     
<label >Telefono (movil):</label>
    <input   required type="text" name="telefono_m_p" id="telefono_m_p" class="form-control  focusNext" tabindex="14"  maxlength="50" placeholder="Telefono (movil)"    >
    </div>
</div>
				
            <div class="modal-footer">
               
  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>


                <button type="button" name="add_p" id="add_p"    class="btn btn-primary focusNext" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>


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
$(document).on("click", "#add_p", function(){
  
    var dni_p = $("#dni_p").val();
    var nombre_p = $("#nombre_p").val();
    var apellido_p = $("#apellido_p").val();
    var domicilio_p = $("#domicilio_p").val();
    var email_p = $("#email_p").val();
    var telefono_f_p = $("#telefono_f_p").val()
    var telefono_m_p = $("#telefono_m_p").val()

    ;
    
    $.ajax({

        url: "../add/insertar_propietario.php",
        
        method: "POST",
        
        data: {
          dni_p: dni_p,
           nombre_p: nombre_p,
            apellido_p: apellido_p,
             domicilio_p: domicilio_p,
              email_p: email_p,
               telefono_f_p: telefono_f_p,
            telefono_m_p: telefono_m_p
               
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

            $("#carga_propietrio").modal("hide");
     
  
        }
        
    })


})
// actualizardatos

});


</script>
 


<script type="text/javascript">





 $("#telefono_m_p").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.


          $('#add_p').click();
         
        

       }
    });




</script>




