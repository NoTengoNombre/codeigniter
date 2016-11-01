<!--
    @Created on : 30-oct-2016, 13:10:24
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$a["ESP"] = "Spain";
$a["FRA"] = "France";
$a["POR"] = "Portugal";


foreach ($a as $value) {
  echo $value;
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














