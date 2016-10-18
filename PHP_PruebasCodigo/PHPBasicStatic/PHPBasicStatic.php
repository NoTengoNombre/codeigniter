<!DOCTYPE html>
<!--
    @Created on : 10-oct-2016, 19:50:24
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Ver {

      static $valor = 1;

      static function valor() {
        echo static::$valor += 10;
      }

    }

    Ver::valor();
    ?>
  </body>
</html>
