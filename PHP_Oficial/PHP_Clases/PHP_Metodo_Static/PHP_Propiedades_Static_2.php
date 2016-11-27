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

      public static $mi_static = 'foo';

      public function valorStatic() {
        return self::$mi_static;
      }

    }

    class Bar extends Foo {

      public function fooStatic() {
        return parent::$mi_static;
      }

    }

    print Foo::$mi_static . "\n";

    $foo = new Foo();
    print $foo->valorStatic() . "\n";
    print $foo->mi_static . "\n";      // "Propiedad" mi_static no definida

    print $foo::$mi_static . "\n";
    $nombreClase = 'Foo';
    print $nombreClase::$mi_static . "\n"; // A partir de PHP 5.3.0

    print Bar::$mi_static . "\n";
    $bar = new Bar();
    print $bar->fooStatic() . "\n";
    ?>
  </body>
</html>

