<!--
    @Created on : 29-oct-2016, 23:34:14
    @Author     : RVS - N.F.N.D
    @Pag        : https://foro.elhacker.net/php/header_como_se_usa-t341568.0.html
    @version    :
    @TODO       : ERROR : habilitar el envio de correos;
-->

<?php
/**
 * Redireccionamiento a una pagina diferente 
 * en el mismo directorio el cual se hizo la peticion
 */
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'T2EjecutaCodigoShell.php';
header("Location: http://$host$uri/$extra");
exit;

