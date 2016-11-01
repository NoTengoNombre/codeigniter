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
$a = 5;
$b = & $a;
$b = 6;

echo "a: ";
var_dump($a);
echo "b: ";
var_dump($b);

// destruyendo $a, "liberando memoria"
//unset($a);
echo 'Se ejecutó unset($a)';
echo "a: ";
var_dump($a);
echo "b:";
var_dump($b);
?>










































