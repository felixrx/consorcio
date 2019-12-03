<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="AgregarNuevo.php">


			
    <div  id="cedula" class="form-group">

      <label >Nombre del Edificio:</label>
<br>
    <input   required type="text" name='id_c'  class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Nombre del Edificio"    >
    </div>


		
    <div  id="cedula" class="form-group">

      <label >Domicilio:</label>
<br>
    <input   required type="text" name='id_c'  class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Domicilio"    >
    </div>




    <div  id="cedula" class="form-group">

      <label >Telefono:</label>
<br>
    <input   required type="text" name='id_c'  class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Telefono"    >
    </div>



    <div  id="cedula" class="form-group">

      <label >Cantidad de Pisos:</label>
<br>
    <input   required type="text" name='id_c'  class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Cantidad de Pisos"    >
    </div>


    <div  id="cedula" class="form-group">

      <label >Cantidad de Departamentos por Piso:</label>
<br>
    <input   required type="text" name='id_c'  class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Cantidad de Departamentos por Piso"    >
    </div>


    <div  id="cedula" class="form-group">

      <label >Tipo de Expensa (fija o movil):</label>
<br>
    <input   required type="text" name='id_c'  class="form-control" onFocus="nextfield ='nb';" onKeyPress="return validar(event)"  maxlength="50" placeholder="Tipo de Expensa (fija o movil)"    >
    </div>





				
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
            </div>

        </div>
    </div>
</div>