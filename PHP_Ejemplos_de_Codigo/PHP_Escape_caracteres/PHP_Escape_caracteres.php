<!--
    @Created on : 13-ene-2017, 23:49:59
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$cadena = "cursos de 'php' \n en \t - escapar la barra inversa(\)";
echo $cadena_escapada = addslashes($cadena);

echo "<pre>";
echo $cadena_escapada . "<p/>";
//echo stripslashes($cadena_escapada) . "<p/>";
echo "</pre>";
 