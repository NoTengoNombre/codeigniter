<!--
    @Created on : 29-oct-2016, 23:34:14
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.header.php
    @version    :
    @TODO       : Utilizado para averiguar el código de status HTTP a enviar. Por ejemplo, si se tiene Apache configurado para usar un script en PHP para controlar las peticiones a ficheros no encontrados (usando la directiva ErrorDocument), querrá asegurarse de que el script genera el código de status que corresponde.
-->
<!--<html> Si dejo esto produce error -->
<?php
header("HTTP/1.0 404 .Not Found");
exit;
