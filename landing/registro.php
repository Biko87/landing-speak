<?php

if (isset($_POST['submit'])){
$fecha = date('Y-m-d');


if ($_POST['checkbox'] !="") {

if (is_array($_POST['checkbox']))

{
while (list($key,$value)= each(($_POST['checkbox']))) {

// Conectando, seleccionando la base de datos
$conexion = mysql_connect("localhost", "root", "");

if (!$conexion) {
    echo "No pudo conectarse a la BD: " . mysql_error();
    exit;
}

if (!mysql_select_db("benditap_eventos")) {
    echo "No ha sido posible seleccionar la BD: " . mysql_error();
    exit;
}


$query = "INSERT INTO cancelar_suscripcion (opciones, comentario,email,fecha) VALUES ('$value','$email',NOW())";
$result = mysql_query($query) or die('No se pudo seleccionar la base de datos2');

}
}

}
}

echo"<script  language='javascript'>alert('Datos enviados!');window.location.href='gracias.html';</script>"; 

?>

