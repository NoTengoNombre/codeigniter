<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 16:49:46
    @Author     : RVS - N.F.N.D
    @Pag        : http://www.lawebdelprogramador.com/foros/PHP/1571909-Como-leer-una-linea-en-concreto-de-un-txt-en-php.html
    @version    :
    @TODO       : leer una línea en particular de un txt
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $doc = 'ruta del archivo a leer';

    $v = file($doc);
    $lv = count($v);
    $ulv = $v[$lv - 1];
    echo $ulv . "<br /><br />";

//    Guardar las lineas del documento
    $fp = fopen($doc, "r");
    for ($indice = 0; $indice <= $ulv; $indice++) {
      $EstWebs[$indice] = fgets($fp);
    }
    fclose($fp);
    ?>
  </body>
</html>
