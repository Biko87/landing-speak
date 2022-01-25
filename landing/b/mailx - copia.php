<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Cavipetrol</title>
	<script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<body>


<?php
if(isset($_GET['submit']))
{
  
	
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
	$cedula=$_GET['cedula'];
	$phone=$_GET['phone'];
	$email=$_GET['email'];
	$checkin= $_GET['checkin'];
	



$body = "
	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' name='viewport'>
	<title>DICE</title>

	<style type='text/css'>
		/* Cool mobile stuff, please don't touch :) */
.izq{padding-left:50px;}
.der{padding-right:50px;}
.img1	{height:57px; width:205px;}
.img2	{height:61px; width:317px;}
@media only screen and (max-width: 600px) {
	body                    { width: 100% !important; -webkit-text-size-adjust: none; }
	table table             { width: 320px !important; }
	.scaleHeader            { width: 320px !important; }
	.scaleHeaderLogo        { width: 300px !important; }
	.scaleFullwidth         { width: 300px !important; height: 127px !important; }
	.scaleSeperator         { width: 300px !important; }
	.scaleFollowus          { width: 240px !important; }
	.fullWidth              { width: 320px !important; }
	.mobileImage            { margin: 20px auto; }
	.center                 { text-align: center !important; }
	.tableCenter            { margin-left: auto !important; margin-right: auto !important; float: none !important; }
	.columnMargin           { margin-bottom: 20px !important; }
	.button                 { margin-left: auto !important; margin-right: auto !important; float: none !important; }
	.img-resposnive			{width: 60px;}
	.img1, .img2			{ width: 200px;}
	.legales				{	width: 35px; height:auto;}
	.shadow_lados			{width: 26px; height: auto;}
	.izq{padding-left:0px;}
	.der{padding-right:0px;}
}
.mobileImage {margin: 20px auto; }
</style>
</head>
<body style='margin: 0; padding: 0;' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>      
<font style='font-family: Tahoma, Geneva, sans-serif; font-size:1px; color:#fff;'>
Muchas gracias por interesarte en DICE (Data Indicate Customer Experience). Un servicio que basado en data, diseña la relación con los clientes para sorprenderlos y mejorar su experiencia de servicio.
</font>
	<!-- START PAGE WRAPPER -->
	<table width='100%' cellspacing='0' cellpadding='0' align='center' style='background:white; color:#666; font-family: Tahoma, Geneva, sans-serif; font-size:14px;'>
		<tr>
			<td valign='top'>

				<!-- START VIEW ONLINE LINK -->
				<table width='100%' class='fullWidth' cellspacing='0' cellpadding='0' align='center' style='background:white;'>
					<tr>
						<td valign='top'>
							<table width='590' cellspacing='0' cellpadding='0' align='center'>
								<tr>
									<td style='font-family: Tahoma, Geneva, sans-serif; font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: right;'>

										<table width='330' cellspacing='0' cellpadding='0' align='left'>
											<tr>
												<td style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: left;'><!-- Problemas con la previsualizaci&oacute;n? <a href='http://benditaess.com/landing/dice/23062016/images/' style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #1D242C; text-decoration: none;'>Clic para ver la versi&oacute;n online</a>--></td>
											</tr>
										</table>                                        

										<table width='200' cellspacing='0' cellpadding='0' align='right'>
											<tr>
												<td style='font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: right;'></td>
											</tr>
										</table> 
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END VIEW ONLINE LINK -->

				<!-- START FULL WIDTH QUOTE+LOGO -->
				<table width='100%' cellspacing='0' cellpadding='0' align='center' >
					<tr>
						<td valign='top'>
							<table width='590' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>
								<tr>
									<td width='590' valign='top'><!-- START LOGO --><!-- END LOGO -->
										<div style=' font-size:10px; color:#FFF; font-family: Tahoma, Geneva, sans-serif;' align='right'><img src='http://benditaess.com/landing/dice/23062016/images/header.png' style='width:100%;' align='middle'></div>
									</td>
								</tr>
							</table>   
						</td>
					</tr>
				</table>

				<!-- START LEFT IMAGE RIGHT TEXT -->
				<table width='100%' cellspacing='0' style='background:white;' cellpadding='0' align='center'>
					<tr>
						<td valign='top'>
							<table width='590' cellspacing='0' cellpadding='0' align='center' style='background:#FFFFFF;'>
								<tr>
									<td>
										<table  width='500' cellspacing='0' cellpadding='0' align='center'>
											<tr>
												<td valign='top'></td>
												<td align='justify' valign='top'>
														<div style='font-family: Arial, Helvetica, sans-serif; font-size:30px; color:#0189A7; line-height:22px; padding: 15px 10px 15px 10px;' align='center'><br><br>
															<strong>Hola {NOMBRE},</strong><br><br>
														</div>												
													<div style='font-family: Arial, Helvetica, sans-serif; padding: 15px 0px 15px 0px; font-size:16px; line-height:25px; color:#3C3C3B' align='center'>

											<strong>Muchas gracias por interesarte en DICE (Data Indicate Customer Experience).</strong> Un servicio que basado en data, dise&ntilde;a la relaci&oacute;n con los clientes para sorprenderlos y mejorar su experiencia de servicio.
												<br><br> 
												
											<div style='font-family: Arial, Helvetica, sans-serif; padding: 15px 40px 15px 40px; font-size:16px; line-height:20px; color:#832155' align='center'>
											<strong>¡Nos vemos este ".$fecha." en la jornada de la ".$dia."; uno de nosotros  se pondrá en contacto con usted para confirmar la hora!</strong>
											</div>
	
												
											
								
											<br/>
												 														
													    </div>
													 </td>
												</tr>
										</table>
										
										
										<img src='http://benditaess.com/landing/dice/23062016/images/footer.png' width='100%' alt=''/>
									</td>									
								</tr>
								<tr>
									<td align='center'>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END LEFT IMAGE RIGHT TEXT -->

				<!-- START FULL WIDTH QUOTE+LOGO -->
				<table width='100%' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>
					<tr>
						<td valign='top'>
							<table width='590' cellspacing='0' cellpadding='0' align='center' style='background:#EFEFF0;'>
								
								</table>   
							</td>
						</tr>
					</table>
					<!-- END FULL WIDTH QUOTE+LOGO -->
				</td>
			</tr>
		</table>
		<!-- END PAGE WRAPPER -->  
		<br/><br/>

	</body>
	</html>

		

	";


include 'mailin.php';
$mailin = new Mailin('antony_padilla@benditaess.com', 'nbYSs7FqG2VvLZKx');
$mailin->
addTo($email,'Contacto')-> //mauricio_bejarano@benditaess.com
//addTo('brayam_martinez@benditaess.com','Contacto')-> //mauricio_bejarano@benditaess.com
setFrom('brayammartinezperdomo@gmail.com', 'Brayam Gmail')->//correo del cliente
setReplyTo('brayam_martinez@benditaess.com','Brayam Bendita')->
//setReplyTo('antony_padilla@benditaess.com','Pienza Meeting de Colombia S.A Bendita Essence')->
setSubject('Cavipetrol: Es tu Corporación')->
//setText("fecha: $fecha\n<br>dia: $dia \n<br>celular: $celular \n<br>direccion: $direccion\n<br>Habeasdata: $checkin\n<br>IP: $ip\n")->
setText("".$mail.", Gracias por dejarnos tus datos.")->
setHtml($body);


  if($mailin->send()) {   






$fileName = "files.csv";
$fileHandle = fopen($fileName, 'a+');
fwrite($fileHandle, "\n".date('Y-m-d H:i:s').' ; '.$nombre.' ; '.$apellido.' ; '.$cedula.' ; '.$phone.' ; '.$email.' ; '.$ip.' ');

 	echo'<script language="javascript">
swal({   title: "Éxito", text: "Tus Datos se han enviado correctamente", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
function(){
setTimeout(function()
{
javascript:history.back(1);
}, 2000); });</script>';


/*"<script  language='javascript'>alert('Gracias por agendar este encuentro con DICE, estamos seguros que ser&aacute; de gran provecho para tu compa&ntilde;ía.');window.location.href='index.php';</script>"; */

  } else {
  	echo '<script language="javascript">
swal({   title: "Ooopsss", text: "¡Algo ha pasado, intentalo nuevamente!", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
function(){
setTimeout(function()
{
javascript:history.back(1);
}, 2000); });</script>';


  	/*"<script  language='javascript'>alert('Error en el env&iacute;o');window.location.href='index.php';</script>"; */
  }
}
?>
	
</body>
</html>






