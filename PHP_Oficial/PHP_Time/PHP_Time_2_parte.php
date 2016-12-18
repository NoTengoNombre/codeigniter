<!--
    @Created on : 22-oct-2016, 20:42:27
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.time.php
    @version    :
    @TODO       :
-->

<?php
$semanaSiguiente = time() + ( 7 * 24 * 60 * 60);
$fecha = date('Y-m-d', $semanaSiguiente);
echo $fecha;
?>
