<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 22:58:29
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/reserved.variables.get.php
    @version    :
    @TODO       :
-->
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
//    Usar siempre GET para URL
    $saludo_get = $_REQUEST["saludo"];
    $texto_get = $_REQUEST["texto"];

    $saludo_request = $_REQUEST["saludo"];
    $texto_request = $_REQUEST["texto"];


    echo "<br />";
    echo $saludo_get;
    echo "<br />";
    echo $texto_get;

    echo "<hr>";

    echo $saludo_get;
    echo "<br />";
    echo $texto_get;
    ?>
  </body>
</html>
