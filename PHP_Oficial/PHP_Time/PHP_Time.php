<!--
    @Created on : 22-oct-2016, 20:42:27
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.time.php
    @version    :
    @TODO       :
-->

<?php
//                           D    H    m    s
$semanaSiguiente = time() + (7 * 24 * 60 * 60);
echo '<strong>Ahora : </strong>' . date('Y-m-d') . "\n";
echo "<br>";
echo '<strong>Semana Siguiente </strong>: ' . date('Y-m-d', $semanaSiguiente) . "\n";
echo "<br>";
echo '<strong>Semana Siguiente </strong>: ' . date('Y-m-d', strtotime('+1 week')) . "\n";
echo "<br>";
?>
