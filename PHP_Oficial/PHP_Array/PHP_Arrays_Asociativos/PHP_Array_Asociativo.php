<!--
    @Created on : 30-oct-2016, 13:10:24
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$arrays_asociativos["ESP"] = "Spain";
$arrays_asociativos["FRA"] = "France";
$arrays_asociativos["POR"] = "Portugal";


foreach ($arrays_asociativos as $valor) {
  echo $valor;
  echo '<br>';
}

echo '<hr>';

$asociativo = array(0 => "Lunes", 1 => "Martes", 2 => "Miercoles");

foreach ($asociativo as $valor) {
  echo $valor;
  echo '<br>';
}

echo '<hr>';

for ($v = 0; $v < count($asociativo); $v++) {
  echo $asociativo[$v];
  echo '<br>';
}














