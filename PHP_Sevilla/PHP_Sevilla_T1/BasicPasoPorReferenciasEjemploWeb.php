<!-- No fear No Distractions -->
<!-- T.E.D , I.T.W.T -->

<!DOCTYPE html>
<html>
  <head>
    <title> Title </title>
  </head>
  <body>
    <p>Hello world!</p>
  </body>
</html>

<?php
/**
 * * Official Guide........: http://php.net/manual/es/index.php
 * * Official Helps   .....: 
 * * Author.......: RadWulf Candle
 * * Notes........: 
 * * Last changed.:
 */
$arrays_asociativos = 5;
$b = & $arrays_asociativos;
$b = 6;

echo "a: ";
var_dump($arrays_asociativos);
echo "b: ";
var_dump($b);

// destruyendo $a, "liberando memoria"
//unset($a);
echo 'Se ejecutó unset($a)';
echo "a: ";
var_dump($arrays_asociativos);
echo "b:";
var_dump($b);
?>










































