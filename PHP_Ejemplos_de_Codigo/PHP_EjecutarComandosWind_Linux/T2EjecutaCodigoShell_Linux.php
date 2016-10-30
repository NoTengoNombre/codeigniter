<!--
    @Created on : 29-oct-2016, 21:10:36
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Comillas invertidas ejecutan codigo Shell
-->

<?php
$salida = shell_exec("ls -l");
$tipo = gettype($salida);
print "El tipo de valor es : " . $tipo;
echo "<pre><hr> $salida </pre>";
?>
