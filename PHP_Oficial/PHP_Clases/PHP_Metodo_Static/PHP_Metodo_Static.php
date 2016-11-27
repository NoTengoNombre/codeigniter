<!--
    @Created on : 27-nov-2016, 23:44:02
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.oop5.static.php
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Foo {

      public static function unMetodoEstatico() {
        echo "unMetodoEstatico";
      }

    }

    Foo::unMetodoEstatico();
    $nombre_clase = 'Foo';
    $nombre_clase::unMetodoEstatico();
    ?>
  </body>
</html>
