<!--
    @Created on : 27-nov-2016, 23:01:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.oop5.basic.php#language.oop5.basic.class.this
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

    class A {

      function foo() {
        if (isset($this)) {
          echo '$this esta definida(';
          echo get_class($this);
          echo ')\n';
        } else {
          echo "\$this no esta definida.\n";
        }
      }

    }

    class B {

      function bar() {
        A::foo();
      }

    }

    $a = new A();
    $a->foo();

    A::foo();
    $b = new B();
    $b->bar();

    B::bar();
    ?>
  </body>
</html>
