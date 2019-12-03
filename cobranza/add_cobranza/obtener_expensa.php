<?php 



$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('consorcio') or die('No se pudo seleccionar la base de datos');

$query="SELECT * FROM departamento  WHERE codigo_dpto=".$_REQUEST["codigo_dpto"];
$result = mysql_query($query)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();

while (($fila = mysql_fetch_array($result)) != NULL) {

	echo "Monto de la Expensa";
    echo '<input  class="form-control" value="'.$fila["expensa"].'">';
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);

?>