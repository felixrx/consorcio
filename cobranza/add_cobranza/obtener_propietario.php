<?php 





$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());




mysql_select_db('consorcio') or die('No se pudo seleccionar la base de datos');

$query="SELECT * FROM propietario";
$result = mysql_query($query)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();
echo '<option value="0">Seleccionar</option>';
while (($fila = mysql_fetch_array($result)) != NULL) {
    echo '<option value="'.$fila["dni_p"].'">'.$fila["nombre_p"].'  '.$fila["apellido_p"].'</option>';
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);



?>