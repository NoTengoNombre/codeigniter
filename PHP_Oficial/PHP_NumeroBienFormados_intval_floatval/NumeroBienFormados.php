<!--
    @Created on : 30-oct-2016, 23:12:55
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.intval.php
    @version    :
    @TODO       :
-->

<?php
$entero = 4;
$decimal = 5.1;
$no_entero = 4.4;

echo intval($entero);
$var1 = intval($entero);
var_dump($var1);
echo floatval($decimal);
$var2 = floatval($decimal);
var_dump($var2);
echo intval($no_entero);
$var3 = intval($no_entero);
var_dump($var3);

echo intval(42);                      // 42
echo '<br>';
echo intval(4.2);                     // 4
echo '<br>';
echo intval('42');                    // 42
echo '<br>';
echo intval('+42');                   // 42
echo '<br>';
echo intval('-42');                   // -42
echo '<br>';
echo intval(042);                     // 34
echo '<br>';
echo intval('042');                   // 42
echo '<br>';
echo intval(1e10);                    // 1410065408
echo '<br>';
echo intval('1e10');                  // 1
echo '<br>';
echo intval(0x1A);                    // 26
echo '<br>';
echo intval(42000000);                // 42000000
echo '<br>';
echo intval(420000000000000000000);   // 0
echo '<br>';
echo intval('420000000000000000000'); // 2147483647
echo '<br>';
echo intval(42, 8);                   // 42
echo '<br>';
echo intval('42', 8);                 // 34
echo '<br>';
echo intval(array());                 // 0
echo '<br>';
echo intval(array('foo', 'bar'));     // 1
echo '<br>';
?>
