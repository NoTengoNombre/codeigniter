<!--
    @Created on : 29-oct-2016, 23:34:14
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.header.php
    @version    :
    @TODO       : El segundo caso especial es el encabezado "Location:" 
No solamente envía el encabezado al navegador, sino que también devuelve el código de status (302) 
REDIRECT al navegador a no ser que el código de status 201 o 3xx ya haya sido enviado
-->
<!--<html> Si dejo esto produce error -->
<?php
header("Location: http://www.example.com");
/**
 * Asegurándonos de que el código interior no será ejecutado cuando se realiza la redirección.
 */
exit;
