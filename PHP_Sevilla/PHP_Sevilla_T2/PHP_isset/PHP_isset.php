<!--
    @Created on : 23-nov-2016, 21:32:57
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$a = 2;
$var = isset($a);
if ($var) {
  echo 'si';
} else {
  echo 'no';
}

$aa = null;
$var1 = isset($aa);
if ($var1) {
  echo 'si';
} else {
  print "!<pre>\t No</pre>";
}
?>
