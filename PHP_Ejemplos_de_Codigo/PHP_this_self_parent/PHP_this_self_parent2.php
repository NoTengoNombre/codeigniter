<!--
    @Created on : 27-nov-2016, 22:29:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://programacion.jias.es/2012/11/poo-en-php-this-parent/
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

    class MiClase {

      const CONSTANTE = " Hola";

    }

    class Clase2 extends MiClase {

      public static $variable = ' static';

      public static function miFuncion() {
        echo parent::CONSTANTE;
        echo self::$variable;
      }

    }

    Clase2::miFuncion();
    ?>
  </body>
</html>
