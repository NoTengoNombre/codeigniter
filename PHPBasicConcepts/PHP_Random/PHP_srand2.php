<!--
    @Created on : 22-oct-2016, 20:55:41
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.srand.php
    @version    :
    @TODO       : srand — Genera un número aleatorio a partir de una semilla

-->

<?php

// semilla de microsegundos
function make_seed() {
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}

print "○ valor : " . srand(make_seed());
for ($index = 0; $index < 10; $index++) {
  $randval = rand();
  print "<br>";
  print "♠ valor : " . $randval;
}
?>
