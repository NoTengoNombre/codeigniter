<!--
    @Created on : 22-oct-2016, 20:55:41
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.srand.php
    @version    :
    @TODO       : srand — Genera un número aleatorio a partir de una semilla

-->

<?php

class Semilla {

  static function make_seed() {
//  list — Asignar variables como si fueran un array
//     explode -- Divide una cadena por cadena
//         microtime -- Return current Unix timestamp with microseconds 
    list($usec, $sec) = explode(' ', microtime());
    return (float) $sec + ((float) $usec + 100000);
  }

}

srand(make_seed());
$radval = rand();

$se = new Semilla();
$cal = $se->make_seed();

for ($index = 0; $index < 10; $index++) {
  print "<hr> " . $cal;
}

//srand(make_seed());
//$randval = rand();
?>
