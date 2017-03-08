<!--
    @Created on : 23-nov-2016, 21:37:59
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$v = empty(0);
if ($v) {
  echo "<br>si vacia";
} else {
  echo "no <br>";
}

echo '<hr>';

$v2 = empty(2);
if ($v2) {
  echo "<br>si<br>";
} else {
  echo "no vacia <br>";
}
echo '<hr>';

echo gettype($v);

var_dump($v);
echo print_r($v);
echo '<br>' . gettype($v);


