<!--
    @Created on : 24-nov-2016, 10:51:09
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
echo 'Ruta completa : ';
$var = $_SERVER['PHP_SELF'];
echo $var;
echo '<hr>';
$var1 = $_SERVER['SERVER_ADDR'];
echo $var1;
echo '<hr>';
$var2 = $_SERVER['SERVER_NAME'];
echo $var2;
echo '<hr>';
$var3 = $_SERVER['DOCUMENT_ROOT'];
echo $var3;
echo '<hr>';
$var4 = $_SERVER['REMOTE_ADDR'];
echo $var4;
echo '<hr>';
$var5 = $_SERVER['REQUEST_METHOD'];
echo $var5;
echo '<hr>';
?>
