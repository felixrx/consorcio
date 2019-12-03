<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="buscar_gastos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Buscar Gastos</h4></center>
            </div>
            <div class="modal-body " >
			<div class="container-fluid ">
	


<!-- Begin page content -->


  <hr>
  <div class="row">
    <div class="col-md-12" > 

<div class="col-md-4">

<label >Edificio:</label>
     <div id="selectorEdificiosGastos">
            
            <select  class="form-control">
               
            </select>

            <script type="text/javascript">
                $(document).ready(function() {
                  
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/serch_cobranza_mysql/obtener_edificio_gastos.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                          

                  $('#selectorEdificiosGastos').html(response2).fadeIn();

        

                  }

            });




 $("#selectorEdificiosGastos select").change(function() {



   $('#muestra_gastos').fadeOut();

   
 $("#selector-gastos_mes select").val('');

 });





                 



                       
                    });

   
             
            </script>

        </div>
    </div>
      <!-- Contenido -->
      
<div class="col-md-2">

<label >Año:</label>
     <div id="selector-gastos_a_o">
            
            <select  class="form-control">
               
            </select>

            <script type="text/javascript">
               
   
  

                $(document).ready(function() {
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/obtener_a_os.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                  $('#selector-gastos_a_o select').html(response2).fadeIn();

     
                

                  }

            });


 $("#selector-gastos_a_o select").change(function() {




   $('#muestra_gastos').fadeOut();

   
 $("#selector-gastos_mes select").val('');


 var edificiosGastos = $("#selectorEdificiosGastos select").val();

 
var  fecha_a_o=  $("#selector-gastos_a_o select").val();



                       
                    });


                });
            </script>
        </div>
    </div>

<div class="col-md-3">

<label >Mes:</label>
     <div id="selector-gastos_mes">
            
            <select  class="form-control">
             
            </select>

            <script type="text/javascript">
               
   
  
$(document).ready(function() {

$.ajax({
                         type: "POST",
                        url: "../gastos/serch_mysql_gastos/obtener_meses.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                  $('#selector-gastos_mes select').html(response2).fadeIn();

      
                

                  }

            });
                  


 $("#selector-gastos_mes select").change(function() {


$('#muestra_gastos').fadeOut();



 var  fecha_mes=  $("#selector-gastos_mes select").val();


                       
                    });


                });
            </script>
        </div>
    </div>
  <!-- Fin row --> 

  <div class="col-md-3" >

<label >Codigo:</label>
    <div id="selector-gastos_codigo">
            
            <select   class="form-control">
               
               
            </select>
            <script type="text/javascript">
               
   
  
$(document).ready(function() {


$("#selector-gastos_mes select").change(function() {



  var  fecha_mes=  $("#selector-gastos_mes select").val();



var  fecha_a_o=  $("#selector-gastos_a_o select").val();

var edificio_gastos = $("#selectorEdificiosGastos select").val();




                          $.ajax({
                         type: "POST",
                          data: {fecha_a_o:fecha_a_o,
                            fecha_mes:fecha_mes,
                            edificio_gastos:edificio_gastos},
                        url: "../gastos/serch_mysql_gastos/mysql_consulta_gastos.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {

                       

                  $('#selector-gastos_codigo select').html(response2).fadeIn();


                  }

            });



                  


                       
                    });
  });

               
            </script>




             

    




        </div>
       
    </div>
 <div class="row">
          <div class="col-md-12"  >
        <div id="muestra_gastos"></div>
        </div>
        </div>

  <script type="text/javascript">
               
   
  
$(document).ready(function() {


$("#selector-gastos_codigo select").change(function() {


 var  Codigo_Gastos=  $("#selector-gastos_codigo select").val();



                          $.ajax({
                         type: "POST",
                          data: {Codigo_Gastos:Codigo_Gastos},
                        url: "../gastos/serch_mysql_gastos/mysql_consulta_gastos_mes.php", //Mando a ajaxdatos.php
                        
                        success: function(response2) {

              

                  $('#muestra_gastos').html(response2).fadeIn();


                  }

            });



                  


                       
                    });
  });

               
            </script>

</div>
            </div>

        </div>
    </div>
</div>



