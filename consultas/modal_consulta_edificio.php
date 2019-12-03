


<script type="text/javascript">
$(document).ready(function(){
    $("#consultar").on('shown.bs.modal', function(){


        $(this).find('#codigo_edificios').focus();


      
    });




 $("#codigo_edificios").keypress(function(e) {
       if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.


          $('#enviarCI').click();
         
          $("#consultar").on('show.bs.modal', function(){
        $(this).find('#codigo_edificios').focus();
    });

       }
    });

});


</script>


 




<div class="modal fade" id="consultar" tabindex="-1" data-easein="expandIn" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="text-align: center;" id="exampleModalLongTitle">Consultar Edificio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form>

      
 <div  id="cedula" class="form-group">

      <label >Codigo del Edificio a consultar:</label>
<br>
    <input  type="text" name="codigo_edificios"  id="codigo_edificios" class="form-control" autofocus maxlength="50"    >
    </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon glyphicon glyphicon-remove"></span>Cerrar</button>

        

              
 <button type="button" name="enviarCI" id="enviarCI" class="btn btn-primary" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon glyphicon-search"></span> Consultar</button>


      </div>
    </div>
  </div>
</div>




 <link rel="stylesheet" href="../css/sweetalert2.css" type="text/css" media="screen"/>

<script src="../js/sweetalert2.js"></script>







<script>
 

 
$(document).ready(function() { 


    
    $('#enviarCI').click(function(){

  var  codigo_edificios= $('#codigo_edificios').val();



     //Si se hace click en enviar cedula
        $.ajax({
            type: "POST",
            url: "../consultas/consultar.php", //Mando a ajaxdatos.php
            data: {codigo_edificios: $('#codigo_edificios').val()}, //La cedula
            success: function(data) {

  
                   if (data == 1 )      {


    

                
 
Swal.fire({


  position: 'top-end',
  type: 'error',
  title: 'Datos no encontrados..!',
  showConfirmButton: false,
  timer: 2500
});
};
   




                if(data !=1){ //Si ajaxdatos.php me devuelve algo
                    $('input[type="text"]').val('');

                     //oculto el modal de cedula
                    $('#bodymodaldatos').html(data);
                    //Inserto los datos en el otro modal que tendrá los datos


 
            $("#consultar").modal("hide");
   
  
            $("#consultar").on('hidden.bs.modal', function () {


          $("#myModaldatos").modal("show");


          $("#myModaldatos").on('show.bs.modal', function () {
         $("#consultar").modal("hide");

          $("#myModaldatos").modal("show");


  });

  
  });


              //Muestro el modal de datos
                }else{





$('input[type="text"]').val('');


                 //si no me devuelve nada el ajaxdatos.php (porque no valido los datos)
                    //Muestro un alert
                }


         }
        });


    }); 




});  
 
</script>