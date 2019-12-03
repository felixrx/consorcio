



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
<div class="modal fade" id="consultar_reporte" data-easein="expandIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Consultar Reportes</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			


		<form  action="../reportes/reporte_general/reporte_general_por_a_os_pdf.php" method="post">



<div  class="form-group">
   	<div class="row">
		

 <div class="col-md-6">
  <label >ID Propietario:</label>
    <div class="input-group">
     <input type="text"  class="form-control" id="buscar_p_reporte" name="buscar_p_deuda" value="">
      <span class="input-group-btn">
        <button type="button"  id="buscar_reporte"    class="btn btn-primary" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon glyphicon glyphicon-search"></span>Buscar</button>
      </span>
    </div>
  </div>




<div class="col-md-6">

<label >Departamentos:</label>
     <div id="selector-departamento_reporte">
            
            <select name="codigo_dpto" class="form-control">
              
              <option ></option>
            </select>

            <script type="text/javascript">
               
   
  
$(document).ready(function() {


    //obtemos datos
$(document).on("click", "#buscar_reporte", function(){


                 var  dni_p=  $("#buscar_p_reporte").val();

        

                    $.ajax({
                         type: "POST",
                          data: {dni_p: ($("#buscar_p_reporte").val())},
                        url: "../cobranza/add_cobranza/obtener_departamento.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {

                  $('#selector-departamento_reporte select').html(response2).fadeIn();

                


                  }

            });
                  
        
                       
                    });


 $("#selector-departamento_reporte select").change(function() {






 var  codigo_dpto=  $("#selector-departamento_reporte select").val();

  var  a_os =  $("#selector-a_o_2_r select").val();


$("#input_dni").val();


                    $.ajax({
                         type: "POST",
                          data: {codigo_dpto: codigo_dpto,
                                  a_o:a_os},
                        url: "../cobranza/serch_cobranza/serch_cobranza_mysql/obtener_deuda_mysql/consultar_deuda_propietario.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {

                  $('#deuda_departamento_reporte').html(response2).fadeIn();


                  }

            });



                       
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
 <div id="selector-a_o_2_r">
            
            <select   name="a_o" class="form-control">
              
              <option  ></option>
            </select>
            <script type="text/javascript">
                $(document).ready(function() {
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/obtener_a_os.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                  $('#selector-a_o_2_r select').html(response2).fadeIn();

     
                

                  }

            });
                   $("#selector-a_o_2_r select").change(function() {






 var  codigo_dpto=  $("#selector-departamento_reporte select").val();

  var  a_os =  $("#selector-a_o_2_r select").val();





                    $.ajax({
                         type: "POST",
                          data: {codigo_dpto: codigo_dpto,
                                  a_o:a_os},
                        url: "../reportes/reporte_mysql/consultar_deuda_propietario_reporte.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {

                  $('#deuda_departamento_reporte').html(response2).fadeIn();


                  }

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
    

 <div class="col-md-12">


  <div id="deuda_departamento_reporte"></div>

  

 </div>
</div>
</div>









            <div class="modal-footer">
               
  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>

  <button type="submit" name="inprimir_reporte"   class="btn btn-primary focusNext" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"><span class="glyphicon glyphicon-print"></span> Generar Reporte</button>

               


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

$("#input_dni").val();
    //obtemos datos
$(document).on("click", "#imprimir_reporte", function(){
  


   var  dni_p=  $("#buscar_p_reporte").val();

   var  a_os =  $("#selector-a_o_2_r select").val();
    var  codigo_dpto=  $("#selector-departamento_reporte select").val();
  



  $.ajax({
                         type: "POST",
                          data: {dni_p: dni_p,
                                  a_o:a_os},
                        url: "../reportes/reporte_general/reporte_general_por_a_os_pdf.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {


    $('#deuda_departamento_reporte').html(response2).fadeIn();


                        }
                      });

 });
</script>