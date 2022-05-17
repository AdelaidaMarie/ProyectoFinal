<?php
$db_name="donaciones";
$db_table_name="donar";
$conexion = new mysqli ("localhost","root","","donaciones");
if (mysqli_connect ("localhost", "root", "","donaciones")){
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
}else{
echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
}
$subs_dni = utf8_decode($_POST['DNI']);
$subs_name = utf8_decode($_POST['Nombre']);
$subs_last = utf8_decode($_POST['Apellidos']);
$subs_email = utf8_decode($_POST['Email']);
$subs_num = utf8_decode($_POST['numero']);
$subs_dona = utf8_decode($_POST['donacion']);
if ($_POST['donacion']>20) {
header('Location: Error.html');
} else {
$insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name .'` (`DNI` , `Nombre` , `Apellidos` , `Email` , `numero` , `donacion`) VALUES ("' . $subs_dni . '" , "' . $subs_name . '" , "' . $subs_last . '" , "' . $subs_email . '" , "' . $subs_num . '" , "' . $subs_dona . '")';
$subir= mysqli_query($conexion, $insert_value);
header('Location: Gracias.html');
}
?>