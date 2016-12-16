<!--
    @Created on : 23-nov-2016, 21:15:48
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
$s = "a";
$s4 = 'a';
$s1 = 1;
$s2 = 1.11;
$s3 = null;
$arrays_asociativos = array("Volvo", "BMW", "Toyota");
echo gettype($s);
echo '<br>';
echo gettype($s4);
echo '<br>';
echo gettype($s1);
echo '<br>';
echo gettype($s2);
echo '<br>';
echo gettype($s3);
echo '<br>';
echo gettype($arrays_asociativos);
$aa = "w";
is_resource($arrays_asociativos);
?>
