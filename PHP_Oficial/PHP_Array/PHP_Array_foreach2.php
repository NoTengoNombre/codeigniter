<!--
    @Created on : 30-oct-2016, 13:10:24
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$array = array(1, 2, 3, 4);

foreach ($array as &$valor) {
  $valor = $valor * 2;
}



foreach ($arrays_asociativos as $valor) {
  echo $valor;
  echo '<br>';
}

foreach ($arrays_asociativos as $clave => $valor) {
  echo "{$clave} => {$valor} ";
  echo '<br>';
}

print_r($arrays_asociativos);


