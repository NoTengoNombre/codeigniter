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
    <title></title>
  </head>
  <body>
    <?php

    class SoyStatic {

      private static $valor;

      public static function set_valor1($valor) {
        self::$valor;
      }

      public static function get_valor1() {
        return self::$valor;
      }

    }

    SoyStatic::set_valor1(1);
    $var = SoyStatic::get_valor1();

    echo $var;
    ?>
  </body>
</html>
