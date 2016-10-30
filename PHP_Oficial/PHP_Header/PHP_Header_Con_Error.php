<!--
    @Created on : 29-oct-2016, 23:34:14
    @Author     : RVS - N.F.N.D
    @Pag        : https://foro.elhacker.net/php/header_como_se_usa-t341568.0.html
    @version    :
    @TODO       : ERROR : habilitar el envio de correos;
-->

<?php
header('refresh: 15; url=http://localhost/');
$para = 'siguelasreglas@gmail.com';
$a = 'siguelasreglas@gmail.com';
$tel = '666666666';
$asunto = 'contacto desde';
$correos = "siguelasreglas@gmail";
$header = 'From: ' . $correos . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $a . ", num " . $tel . " \r\n";
$mensaje .= "el correol es: " . $correos . " \r\n";
//$mensaje .= "Mensaje: " . $_POST['texto'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'estatus=enviado';
?>
