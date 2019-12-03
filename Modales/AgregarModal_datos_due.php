<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="datos_due" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabele">DUEÑO DEL DEPARTAMENTO</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="AgregarNuevo.php">


			
    <div  id="cedula" class="form-group">

      <label >DNI:</label>
<br>
    <input   required type="text" name='dni'  id="dni" class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="DNI"    >
    </div>


	  <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Nombre:</label>

    <input   required type="text" name="telefono" id="telefono" class="form-control md-6"  onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Nombre"    >
    </div>
    
    <div class="col-md-6">
     
<label >Apellido:</label>
    <input   required type="text" name="telefono" id="telefono" class="form-control"  onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Apellido"    >
    </div>
</div>
</div>



    <div  id="cedula" class="form-group">

      <label >Domicilio:</label>
<br>
    <input   required type="text" name="domicilio" id="domicilio" class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Domicilio"    >
    </div>


    <div  id="cedula" class="form-group">

      <label >Email:</label>
<br>
    <input   required type="text" name="email" id="email" class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Email"    >
    </div>





    <div  id="cedula" class="form-group">

    


<div class="row">

   

<div class="col-md-6">
    <label >Telefono (fijo):</label>

    <input   required type="text" name="telefono" id="telefono" class="form-control md-6"  onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Telefono (fijo)"    >
    </div>
    
    <div class="col-md-6">
     
<label >Telefono (movil):</label>
    <input   required type="text" name="telefono" id="telefono" class="form-control"  onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Telefono (movil)"    >
    </div>
</div>



				
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
            </div>

        </div>
    </div>
</div>