



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
        $(this).find('#').focus();
    });





});


</script>
















<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="cobranza" tabindex="-1" data-easein="expandIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Registrar Pagos</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			


		<form  action="" method="post">



<div  class="form-group">
   	<div class="row">
		

 <div class="col-md-6">
  <label >ID Propietario:</label>
    <div class="input-group">
     <input type="text"  class="form-control" id="buscar_p" name="buscar_p" value="">
      <span class="input-group-btn">
        <button type="button"  id="buscar_propietario"    class="btn btn-primary" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon glyphicon glyphicon-search"></span>Buscar</button>
      </span>
    </div>
  </div>




<div class="col-md-6">

<label >Departamentos:</label>
     <div id="selector-departamento">
            
            <select class="form-control">
              
              <option ></option>
            </select>

            <script type="text/javascript">
               
   
  
$(document).ready(function() {

   $("input[name=buscar_p]").blur(function(){
  
  

                 var  dni_p=  $("#buscar_p").val();

        

                    $.ajax({
                         type: "POST",
                          data: {dni_p: ($("#buscar_p").val())},
                        url: "../cobranza/add_cobranza/obtener_departamento.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {

                  $('#selector-departamento select').html(response2).fadeIn();


                  }

            });
                  
          $("#selector-departamento select").change(function() {





var  dni_p=  $("#buscar_p").val();


var  mes=  $("#selector-mes select").val();


var  codigo_dpto=  $("#selector-departamento select").val();

var  a_nos=  $("#selector-a_o select").val();




$("#recibo").val(dni_p.concat(codigo_dpto).concat(mes).concat(a_nos));



                       
                    });
                       
                    });


                });
            </script>

</div>


</div>


</div>


  </div>





<div  class="form-group">
   	<div class="row">
<div class="col-md-6">



     <div id="selector">
		<label>Expensa:</label>
     <input type="text" name="" class="form-control">
            
          </div>


            <script type="text/javascript">
               
   
  
$(document).ready(function() {


    //obtemos datos
 $("#selector-departamento select").change(function() {

               

                      var id= $('#selector-departamento select').val();
     
 

                    $.ajax({
                         type: "POST",
                          data: {id: id},


                        url: "../cobranza/serch_cobranza/obtener_expensa.php", //Mando a ajaxdatos.php
                        
                        success: function(response) {

                  $('#selector').html(response).fadeIn();









                  }

            });
                  
 
                       
                    });


                });
            </script>

</div>


















<div class="col-md-6">
    <label >Mes:</label>
 <div id="selector-mes">
            
            <select class="form-control">
              
             
            </select>
            <script type="text/javascript">
                $(document).ready(function() {
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/obtener_meses.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                  $('#selector-mes select').html(response2).fadeIn();

      
                

                  }

            });
                  


  $("#selector-mes select").change(function() {





var  dni_p=  $("#buscar_p").val();


var  mes=  $("#selector-mes select").val();


var  codigo_dpto=  $("#selector-departamento select").val();

var  a_nos=  $("#selector-a_o select").val();

  var  expensa=  $('input:text[name=selector-expensa]').val();

               


$("#recibo").val(dni_p.concat(codigo_dpto).concat(mes).concat(a_nos));



                       
                    });
                       
                    });


                       
                 

   
             
            </script>
    </div>
    </div>

</div>


  </div>




  
  








 
<div  id="" class="form-group">
   <div class="row">

   

<div class="col-md-3">
   
    <label >Año:</label>
 <div id="selector-a_o">
            
            <select class="form-control">
              
              <option ></option>
            </select>
            <script type="text/javascript">
                $(document).ready(function() {
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/obtener_a_os.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                  $('#selector-a_o select').html(response2).fadeIn();

      		
                

                  }

            });
                   $("#selector-a_o select").change(function() {




var  dni_p=  $("#buscar_p").val();


var  mes=  $("#selector-mes select").val();


var  codigo_dpto=  $("#selector-departamento select").val();

var  a_nos=  $("#selector-a_o select").val();




$("#recibo").val(dni_p.concat(codigo_dpto).concat(mes).concat(a_nos));


                       
                    });

    });
             
            </script>

        </div>


    </div>
    
    <div  id="paga" class="col-md-3">
   <label >Pago:</label>
     

<select id="paga" class="form-control">
           <option value="">Pago</option>

        <option value="Si">Si</option>
        <option value="No">No</option>
        

           </select>

         </div>
   <div class="col-md-6">
<label>Recibo Nº:</label> 
       <input type="text" id="recibo"   value="" class="form-control">
</div>

    </div>
</div>




            <div class="modal-footer">
               
  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>


                <button type="button" name="add_expensa" id="add_expensa"    class="btn btn-primary focusNext" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>


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
$(document).on("click", "#add_expensa", function(){
  



var  dni_p=  $("#buscar_p").val();


var  mes=  $("#selector-mes select").val();


var  codigo_dpto=  $("#selector-departamento select").val();

var  a_nos=  $("#selector-a_o select").val();


 var  paga=  $("#paga select").val();

 var  expensa=  $('input:text[name=selector-expensa]').val();




var  recibo=  $("#recibo").val();







    
    $.ajax({

        url: "../cobranza/add_cobranza/insert_cobranza_mysql/insert_cobranza_mysql.php",
        
        method: "POST",
        
       data: {
              dni_p: dni_p,
              codigo_dpto: codigo_dpto ,
              mes:mes,
              monto:expensa ,
              a_o: a_nos ,
              paga :paga,
              num:  recibo,   },
        
        
        success: function(data){




   

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
 

