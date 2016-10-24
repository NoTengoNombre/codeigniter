<!--
    @Created on : 22-oct-2016, 17:15:18
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$n = 10;
$ii = 0;
for ($i = 3; $i < $n; $i = $i + 2) {
  echo "contador " . $ii++;
  echo "<br><h2>♦ - " . $i . "</h2>";
  if ($n % $i == 0) {
    echo "<br>• - " . $i;
  }
  echo "<br><h3>♠ - " . $i . "</h3>";
}

$n1 = 10;
$ii1 = 0;
for ($ii1 = 0; $ii1 < $n1; $ii = $ii1++) {
  echo "<h3> ○ " . $ii1 . "</h3> ";
}
?>
