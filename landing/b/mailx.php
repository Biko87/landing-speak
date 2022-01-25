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
if(isset($_POST['submit']))
{
  
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$cedula=$_POST['cedula'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$checkin= $_POST['checkin'];
	



$body = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'><head><meta http-equiv='X-UA-Compatible' content='IE=edge' /><meta name='viewport' content='width=device-width, initial-scale=1' /><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><meta name='apple-mobile-web-app-capable' content='yes' /><meta name='apple-mobile-web-app-status-bar-style' content='black' /><meta name='format-detection' content='telephone=no' /><title>¡Gracias por comenzar a darte muchos gustos con nuestro Crédito de Consumo!</title><style type='text/css'>
        /* Resets */
        .ReadMsgBody { width: 100%; background-color: #ebebeb;}
        .ExternalClass {width: 100%; background-color: #ebebeb;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
        body {margin:0; padding:0;}
        .yshortcuts a {border-bottom: none !important;}
        .rnb-del-min-width{ min-width: 0 !important; }

        /* Image width by default for 3 columns */
        img[class='rnb-col-3-img'] {
        max-width:170px;
        }

        /* Image width by default for 2 columns */
        img[class='rnb-col-2-img'] {
        max-width:264px;
        }

        /* Image width by default for 2 columns aside small size */
        img[class='rnb-col-2-img-side-xs'] {
        max-width:180px;
        }

        /* Image width by default for 2 columns aside big size */
        img[class='rnb-col-2-img-side-xl'] {
        max-width:350px;
        }

        /* Image width by default for 1 column */
        img[class='rnb-col-1-img'] {
        max-width:550px;
        }

        /* Image width by default for header */
        img[class='rnb-header-img'] {
        max-width:590px;
        }

        /* Ckeditor line-height spacing */
        .rnb-force-col p, ul, ol{margin:0px!important;}
        .rnb-del-min-width p, ul, ol{margin:0px!important;}

        @media screen and (max-width: 360px){
        /* yahoo app fix width 'tmpl-2 tmpl-10 tmpl-13' in android devices */
        .rnb-yahoo-width{ width:360px!important;}               
        }   

        @media screen and (max-width: 480px) {
        td[class='rnb-container-padding'] {
        padding-left: 10px !important;
        padding-right: 10px !important;
        }

        /* force container nav to (horizontal) blocks */
        td[class='rnb-force-nav'] {
        display: block;
        }
        }

        @media only screen and (max-width : 600px) {

        /* center the address &amp; social icons */
        .rnb-text-center {text-align:center !important;}

        /* force container columns to (horizontal) blocks */
        td[class~='rnb-force-col'] {
        display: block;
        padding-right: 0 !important;
        padding-left: 0 !important;
        }

        table[class~='rnb-container'] {
         width: 100% !important;
        }

        table[class='rnb-btn-col-content'] {
        width: 100% !important;
        }
        table[class='rnb-col-3'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;

        /* change left/right padding and margins to top/bottom ones */
        margin-bottom: 10px;
        padding-bottom: 10px;
        /*border-bottom: 1px solid #eee;*/
        }

        table[class='rnb-last-col-3'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;
        }

        table[class='rnb-col-2'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;

        /* change left/right padding and margins to top/bottom ones */
        margin-bottom: 10px;
        padding-bottom: 10px;
        /*border-bottom: 1px solid #eee;*/
        }

        table[class='rnb-col-2-noborder-onright'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;

        /* change left/right padding and margins to top/bottom ones */
        margin-bottom: 10px;
        padding-bottom: 10px;
        }

        table[class='rnb-col-2-noborder-onleft'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;

        /* change left/right padding and margins to top/bottom ones */
        margin-top: 10px;
        padding-top: 10px;
        }

        table[class='rnb-last-col-2'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;
        }

        table[class='rnb-col-1'] {
        /* unset table align='left/right' */
        float: none !important;
        width: 100% !important;
        }

        img[class='rnb-col-3-img'] {
        /**max-width:none !important;**/
        width:100% !important;
        }

        img[class='rnb-col-2-img'] {
        /**max-width:none !important;**/
        width:100% !important;
        }

        img[class='rnb-col-2-img-side-xs'] {
        /**max-width:none !important;**/
        width:100% !important;
        }

        img[class='rnb-col-2-img-side-xl'] {
        /**max-width:none !important;**/
        width:100% !important;
        }

        img[class='rnb-col-1-img'] {
        /**max-width:none !important;**/
        width:100% !important;
        }

        img[class='rnb-header-img'] {
        /**max-width:none !important;**/
        width:100% !important;
        margin:0 auto;
        }

        img[class='rnb-logo-img'] {
        /**max-width:none !important;**/
        width:100% !important;
        }

        td[class='rnb-mbl-float-none'] {
        float:inherit !important;
        }

        .img-block-center{text-align:center!important;}

        .logo-img-center
        {
            float:inherit!important;
        }

    }</style><!--[if gte mso 11]><style type='text/css'>table{border-spacing: 0; }table td {border-collapse: separate;}</style><![endif]--><!--[if mso 15]><style type='text/css'>.mso-single-img-block {padding:0px 10px 0px 10px !important;}.msib-left-img {padding:0px 10px 0px 0px !important;}.mso-single-img-block2 {padding:0px 10px 0px 10px !important;}.msib-right-img {padding:0px 0px 0px 5px !important;}.mso-double-img-block {padding:0px 0px 0px 10px !important;}.mdib-first-left-img {padding:0px 0px 0px 0px !important;}.mso-three-img-block {padding:0px 0px 0px 10px !important;}.mtib-first-left-img {padding:0px 0px 0px 0px !important;}.mtib-second-left-img {padding:0px 0px 0px 0px !important;}.mso-img-content-block {padding:0px 13px 0px 13px !important;}.mso-button-block {padding:0px 10px 0px 10px !important;}</style><![endif]--><!--[if !mso]><!--><style type='text/css'>table{border-spacing: 0;} table td {border-collapse: collapse;}</style> <!--<![endif]--></head><body>

<table border='0' width='100%' cellpadding='0' cellspacing='0' class='main-template' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>

    
    <tbody><tr style='display:none !important; font-size:1px; mso-hide: all;'><td>Gracias por interesarte en nuestro Crédito de Consumo.
En los próximos días nos estaremos comunicando contigo,
para que así comiences a disfrutar del crédito que te ofrece:</td><td></td></tr>
    
    <tr>
    
        
        <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>
        
            
            
            

            
            
            

            
            <table class='rnb-del-min-width' width='100%' cellpadding='0' border='0' cellspacing='0' style='min-width:590px; background-color:#d6d6d6;' name='Layout_' id='Layout_'>
                <tbody><tr>
                    
                    <td class='rnb-del-min-width' valign='top' align='center' bgcolor='#d6d6d6' style='min-width:590px; background-color:#d6d6d6;'>
                        
                        <table width='100%' cellpadding='0' border='0' height='30' cellspacing='0' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>
                            <tbody><tr>
                                
                                <td valign='top' height='30'>
                                    <img width='20' height='30' style='display:block; max-height:30px; max-width:20px;' alt='' src='http://img.mailinblue.com/new_images/rnb/rnb_space.gif'>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
            

            
            
            

            
            
            

            
            
            
            
            
            
            

            
            
            

            
            
            

                        
            
            

            
            
            


            
            
            

        </td>
    </tr><tr>
    
        
        <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>
        
            
            
            

            
            
            

            
            
            

            
            <table class='rnb-del-min-width' width='100%' cellpadding='0' border='0' cellspacing='0' bgcolor='#d6d6d6' style='min-width:590px; background-color:#d6d6d6;' name='Layout_5' id='Layout_5'>
                <tbody><tr>
                    <td class='rnb-del-min-width' valign='top' align='center' style='min-width: 590px;'>
                        
                        <table width='590' class='rnb-container' cellpadding='0' border='0' bgcolor='#d6d6d6' align='center' cellspacing='0' style='background-color:#d6d6d6;'>
                            <tbody><tr>
                                <td valign='top' align='center'>

                                    
                                    
                                    
                                    <img border='0' hspace='0' vspace='0' width='590' class='rnb-header-img' alt='' style='display:block; border-radius:0px; width:590px;max-width:590px !important;' src='http://img.mailinblue.com/1007535/images/rnb/original/577d1a448bc34efc6a8b8734.jpg'>

                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>            
            
            

        </td>
    </tr><tr>
    
        
        <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>           
            
            <table width='100%' cellpadding='0' border='0' cellspacing='0' bgcolor='#d6d6d6' style='background-color:#d6d6d6;' name='Layout_8' id='Layout_8'>
                
                <tbody><tr>
                    
                    <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color: #d6d6d6;'>
                        

                        <table border='0' width='590' cellpadding='0' cellspacing='0' class='rnb-container' bgcolor='#ffffff' style='height: 0px; border-radius: 0px; border-collapse: separate; padding-left: 20px; padding-right: 20px; background-color: rgb(255, 255, 255);'>
                            <tbody><tr>
                                
                                <td class='rnb-container-padding' bgcolor='#ffffff' style='background-color: #ffffff; font-size: px;font-family: ; color: ;'>

                                    <table border='0' cellpadding='0' cellspacing='0' class='rnb-columns-container' align='center' style='margin:auto;'>
                                        <tbody><tr>

                                            
                                            <td class='rnb-force-col' align='center'>

                                                
                                                <table border='0' cellspacing='0' cellpadding='0' align='center' class='rnb-col-1'>

                                                    <tbody><tr>
                                                        <td height='10'></td>
                                                    </tr>

                                                    
                                                    <tr>
                                                        
                                                        <td style='font-size:18px;font-family:'Trebuchet MS',Helvetica,sans-serif; color:#999; font-weight:normal; text-align:center;'>

                                                            
                                                                    <span style='color:#999; font-weight:normal;'><strong><span style='font-size:23px'><span style='color:#800080'>Hola ".$nombre.",</span></span></strong></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='10'></td>
                                                    </tr>
                                                    

                                                </tbody></table>
                                                

                                            </td>
                                            



                                        </tr>
                                    </tbody></table>

                                </td>
                            </tr>

                        </tbody></table>

                    </td>
                </tr>

            </tbody></table>
            


            
            
            

        </td>
    </tr><tr>
    
        
        <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>         


            
            <table class='rnb-del-min-width' width='100%' cellpadding='0' border='0' cellspacing='0' bgcolor='#d6d6d6' style='min-width:590px; background-color:#d6d6d6;' name='Layout_10'>
                <tbody><tr>
                    
                    <td class='rnb-del-min-width' align='center' valign='top' bgcolor='#d6d6d6' style='min-width:590px; background-color: #d6d6d6;'>
                        
                        <table width='590' border='0' cellpadding='0' cellspacing='0' class='rnb-container' bgcolor='#ffffff' style='border-radius: 0px; border-collapse: separate; padding-left: 20px; padding-right: 20px; background-color: rgb(255, 255, 255);'>

                            <tbody><tr>
                                <td height='15' style='font-size:1px; line-height:1px;'>&nbsp;</td>
                            </tr>
                            <tr>
                                
                                <td valign='top' class='rnb-container-padding' bgcolor='#ffffff' style='background-color: #ffffff;' align='left'>

                                    <table width='100%' border='0' cellpadding='0' cellspacing='0' class='rnb-columns-container'>
                                        <tbody><tr>
                                            
                                            
                                            
                                            <td class='rnb-force-col' valign='top' style='padding-right: 0px;'>

                                                
                                                
                                                
                                                
                                                <table border='0' valign='top' cellspacing='0' cellpadding='0' width='100%' align='left' class='rnb-col-1'>

                                                    
                                                    <tbody><tr>
                                                        
                                                        <td style='font-size:13px; font-family:Arial,Helvetica,sans-serif, sans-serif; color:#555;'><div style='line-height: 125%; text-align: center;'><strong>Gracias por interesarte en nuestro Crédito de Consumo. </strong></div>

<div style='line-height: 125%; text-align: center;'>En los próximos días nos estaremos comunicando contigo,</div>

<div style='line-height: 125%; text-align: center;'>para que así comiences a disfrutar del crédito que te ofrece:</div>
</td>
                                                    </tr>
                                                    

                                                </tbody></table>

                                                
                                            </td>
                                        </tr>
                                    </tbody></table>

                                </td>
                            </tr>
                            <tr>
                                <td height='21' style='font-size:1px; line-height:1px;border-bottom:0px;'>&nbsp;</td>
                            </tr>
                        </tbody></table>

                    </td>
                </tr>
            </tbody></table>
            

        </td>
    </tr><tr>
    
        
        <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>
        
            
            <table class='rnb-del-min-width' width='100%' cellpadding='0' border='0' cellspacing='0' bgcolor='#d6d6d6' style='min-width:590px; background-color:#d6d6d6;' name='Layout_9' id='Layout_9'>
                <tbody><tr>
                    
                    <td class='rnb-del-min-width' align='center' valign='top' bgcolor='#d6d6d6' style='min-width:590px; background-color: #d6d6d6;'>
                        
                        <table width='590' border='0' cellpadding='0' cellspacing='0' class='mso-double-img-block rnb-container' bgcolor='#edeef0' style='border-radius: 0px; border-collapse: separate; padding-left: 20px; padding-right: 20px; background-color: rgb(237, 238, 240);'>
                            <tbody><tr>
                                <td height='22' style='font-size:1px; line-height:1px;'>&nbsp;</td>
                            </tr>
                            <tr>
                                
                                <td valign='top' class='rnb-container-padding' bgcolor='#edeef0' style='background-color: #edeef0;' align='left'>

                                    <table width='100%' border='0' cellpadding='0' cellspacing='0' class='rnb-columns-container'>
                                        <tbody><tr>
                                            
                                            
                                            
                                            <td class='mdib-first-left-img rnb-force-col' valign='top' style='padding-right: 20px;'>
                                            
                                                
                                                
                                                
                                                
                                                <table border='0' valign='top' cellspacing='0' cellpadding='0' width='264' align='left' class='rnb-col-2'>
                                                
                                                    
                                                    <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <tr>
                                                        
                                                        <td style='font-size:13px; font-family:Arial,Helvetica,sans-serif, sans-serif; color:#555;'>
                                                            
                                                            <div><ul>
    <li style='line-height: 150%;'>Plazo de 6 años.</li>
    <li style='line-height: 150%;'>Tasa de 11.05% E.A.</li>
    <li style='line-height: 150%;'>Cupo dependiendo de tus aportes.</li>
    <li style='line-height: 150%;'>Garantía de pagaré a tu nombre.</li>
</ul>
</div>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </tbody></table>
                                                
                                                
                                            </td><td class=' rnb-force-col' valign='top' style='padding-right: 0px;'>
                                            
                                                
                                                
                                                
                                                
                                                <table border='0' valign='top' cellspacing='0' cellpadding='0' width='264' align='left' class='rnb-last-col-2'>
                                                
                                                    
                                                    <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <tr>
                                                        
                                                        <td style='font-size:13px; font-family:Arial,Helvetica,sans-serif, sans-serif; color:#555;'>
                                                            
                                                            <div><ul>
    <li style='line-height: 150%;'>Pagos de forma quincenal, mensual, semestral.</li>
    <li style='line-height: 150%;'>Fácil accesibilidad.</li>
    <li style='line-height: 150%;'>Si eres pensionado podrás pagar con la mesada 13 y 14.</li>
</ul>
</div>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </tbody></table>
                                                
                                                
                                            </td>
                                        </tr>
                                    </tbody></table>
                                
                                </td>
                            </tr>
                            <tr>
                                <td height='6' style='font-size:1px; line-height:1px;'>&nbsp;</td>
                            </tr>
                        </tbody></table>
                
                    </td>
                </tr>
            </tbody></table>          
            

        </td>
    </tr><tr>
    
        
        <td align='center' valign='top' bgcolor='#d6d6d6' style='background-color:#d6d6d6;'>
        
            
            
            

            
            
            

            
            
            

            
            <table class='rnb-del-min-width' width='100%' cellpadding='0' border='0' cellspacing='0' bgcolor='#d6d6d6' style='min-width:590px; background-color:#d6d6d6;' name='Layout_6' id='Layout_6'>
                <tbody><tr>
                    <td class='rnb-del-min-width' valign='top' align='center' style='min-width: 590px;'>
                        
                        <table width='590' class='rnb-container' cellpadding='0' border='0' bgcolor='#d6d6d6' align='center' cellspacing='0' style='background-color:#d6d6d6;'>
                            <tbody><tr>
                                <td valign='top' align='center'>

                                    
                                    
                                    
                                    <img border='0' hspace='0' vspace='0' width='590' class='rnb-header-img' alt='' style='display:block; border-radius:0px; width:590px;max-width:590px !important;' src='http://img.mailinblue.com/1007535/images/rnb/original/577d17d48bc34ee4698b8798.jpg'>

                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>            
            
            

        </td>
    </tr>
</tbody></table>

</body></html>		

	";

include 'mailin.php';
$mailin = new Mailin('antony_padilla@benditaess.com', 'nbYSs7FqG2VvLZKx');
$mailin->
addTo($email,'Contacto')-> //mauricio_bejarano@benditaess.com
//addTo('brayam_martinez@benditaess.com','Contacto')-> //mauricio_bejarano@benditaess.com
addTo('brayam_martinez@benditaess.com', 'Contacto')->
setFrom('antony_padilla@benditaess.com', 'Bendita')->
//setReplyTo('antony_padilla@benditaess.com','Pienza Meeting de Colombia S.A Bendita Essence')->
setSubject('Cavipetrol: Gracias por interesarte en nuestro Crédito de Consumo.')->
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






