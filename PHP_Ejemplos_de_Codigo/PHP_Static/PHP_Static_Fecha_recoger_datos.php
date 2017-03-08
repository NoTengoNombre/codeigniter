<!--
    @Created on : 07-ene-2017, 1:23:54
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Static</title>
  </head>
  <body>
    <?php
    require_once './PHP_Static_Fecha.php';

    $fecha = Date_f::getHora();
//    echo $fecha;

    $tiempo = getdate();
    echo $tiempo['minutes'];
    echo '<hr>';
    var_dump($tiempo);



    echo '<hr>';
    echo print_r(str_split($fecha, 1));
    $var = (str_split($fecha, 1));
    echo '<hr>';
    echo gettype($var);
    echo '<hr>';
    echo $var[0];
    echo $var[1];
    echo $var[2];
    echo $var[3];
    echo $var[4];
    echo $var[5];
    echo $var[6];
    echo $var[7];
    echo '<hr>';
//
//    $v = 0;
//    do {
//      echo $var[6];
//      echo $var[7];
//      echo '<br>';
//    } while ($fecha < getdate());





    echo '<br>';
    echo Date_f::getFecha();
    ?>
  </body>
</html>









