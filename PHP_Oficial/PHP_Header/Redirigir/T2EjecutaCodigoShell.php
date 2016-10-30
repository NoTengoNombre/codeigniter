<!--
    @Created on : 29-oct-2016, 21:10:36
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Comillas invertidas ejecutan codigo Shell
-->

<?php
$salida = shell_exec("netstat -ab -p tcp");
$tipo = gettype($salida);
print "El tipo de valor es : " . $tipo;
echo "<pre><hr> $salida </pre>";
?>
