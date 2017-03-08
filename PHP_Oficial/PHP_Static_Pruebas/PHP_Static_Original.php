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

    class A {

      const NOMBRE = 'A';

      public static function prueba() {
        $args = func_get_args();
        echo static::NOMBRE, " " . join(',', $args) . "\n";
      }

    }

    class B extends A {

      const NOMBRE = 'B';

      public static function prueba() {
        echo self::NOMBRE, "\n";
        forward_static_call(array('A', 'prueba'), 'mas', 'args');
        forward_static_call('prueba', 'otro', 'args');
      }

    }

    B::prueba('foo');

    function prueba() {
      $args = func_get_args();
      echo "C " . join(',', $args . " \n");
    }
    ?>
  </body>
</html>
