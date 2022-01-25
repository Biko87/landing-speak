<?php

include 'Mailin.php';
$mailin = new Mailin('antony_padilla@benditaess.com', 'nbYSs7FqG2VvLZKx');
$mailin->
//addTo('veronica.gomez@autogalias.com', 'Contacto')->
addTo('brayam_martinez@benditaess.com', 'Contacto')->
setFrom('antony_padilla@benditaess.com', 'Bendita')-> // Cambiar por: 'servicio.cliente@cavipetrol.com', 'Cavipetrol'
//setReplyTo('antony_padilla@benditaess.com','Contacto')->
//setReplyTo('antony_padilla@benditaess.com','Pienza Meeting de Colombia S.A Bendita Essence')->
setSubject('Cavipetrol: Es tu Corporación')->
setText('Test Inbox')->
setHtml('<strong>Test Inbox</strong>');
$res = $mailin->send();

echo $res;
/**
El mensaje de éxito se reenviará de esta forma:
{'result' => true, 'message' => 'E-mail enviado'}
*/


?>