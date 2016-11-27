<!--
    @Created on : 24-nov-2016, 17:23:23
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$array = array(1, 2, 3, 4);

foreach ($array as &$valor) {
  echo '<br>' . $valor = $valor * 2;
}
?>
