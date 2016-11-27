<!--
    @Created on : 27-nov-2016, 23:53:29
    @Author     : RVS - N.F.N.D - Home
    @Pag        : https://desarrolla2.com/post/metodos-y-atributos-en-php-segun-su-visibilidad
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

    class Coche {

      private $velocidad = 0;
      public $velocidad2 = 0;

      function aumentarVelocidad() {
        $this->velocidad++;
      }

      function aumentarVelocidad2() {
        $this->velocidad2++;
      }

      function parar() {
        $this->velocidad = 0;
      }

      function parar2() {
        $this->velocidad2 = 0;
      }

    }

    $coche = new Coche();
//    PROVOCA ERROR
//    $coche->velocidad = 100;
    $coche2 = new Coche();
    $coche2->parar2();
    $coche2->aumentarVelocidad2();
    print_r($coche2);

    echo '<br>Velocidad : ' . $coche2->velocidad2;
    ?>
  </body>
</html>
