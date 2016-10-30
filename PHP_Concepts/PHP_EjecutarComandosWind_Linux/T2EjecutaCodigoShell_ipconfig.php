<!--
    @Created on : 29-oct-2016, 21:10:36
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Comillas invertidas ejecutan codigo Shell
-->

<?php
$salida = shell_exec("ipconfig");
echo "<pre><hr> $salida </pre>";
