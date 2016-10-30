<!--
    @Created on : 22-oct-2016, 12:26:53
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$num = filter_input(INPUT_GET, 'num');
if ($num < 1) {
  $num = 120;
}

$sieve = array();
for ($indice = 1; $indice <= $num; $indice++) {
  $sieve[$indice] = 1;
}
for ($step = 2; $step < $num; $step++) {
//     4                4  <  120   4  =  4 + 2
  for ($indice = 2 * $step; $indice <= $num; $indice += $step) {
    $sieve[$indice] = 0;
  }
}
?>

<html>
  <body>
    <p>Sieve of Eratosthenes</p>
    <p><?php
      for ($indice = 1; $indice <= $num; $indice++) {
        if ($sieve[$indice]) {
          ?>Prime: <?php print $indice ?><br /><?php
        }
      }
      ?></p>
  </body>
</html>