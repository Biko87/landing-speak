<?php

if (isset($_POST['submit']))
$noquiero =$_POST['opcion1']; //No quiero seguir recibiendo estos emails
$nunca =$_POST['opcion2'];//Nunca me suscribí a esta lista de correo
$inapropiado =$_POST['opcion3'];//Estos correos electrónicos son inapropiados
$spam =$_POST['opcion4'];//Estos correos electrónicos son spam y deberían ser reportados
$otromotivo =$_POST['opcion5'];//Otros motivos, (escriba una razón a continuación)
$comentario =$_POST['comentario'];//Otros motivos, (escriba una razón a continuación)
$email =$_POST['email'];
$fecha = date('Y-m-d');


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


$query = "INSERT INTO cancelar_suscripcion (opcion1, opcion2, opcion3, opcion4, opcion5, comentario, email, fecha) VALUES ('$noquiero', '$nunca' ,'$inapropiado', '$spam', '$otromotivo', '$comentario',$email, NOW())";
$result = mysql_query($query) or die('No se pudo seleccionar la base de datos2');




echo"<script  language='javascript'>alert('Datos enviados!');window.location.href='index.html';</script>"; 
  



?>
		
