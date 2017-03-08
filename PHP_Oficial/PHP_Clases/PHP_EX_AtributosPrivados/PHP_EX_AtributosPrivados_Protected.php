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

      protected $velocidad = 0;
      private $combustible = 10;

      function setVelocidad($velocidad) {
        if ($this->getCombustible()) {
          $this->velocidad = (int) $velocidad;
        } else {
          $this->velocidad = 0;
        }
      }

      private function getCombustible() {
        return $this->combustible;
      }

    }

    Class Deportivo extends Coche {

      function aumentarVelocidad() {
        if ($this->getCombustible()) {
          $this->velocidad = $this->velocidad * 2;
        } else {
          $this->velocidad = 0;
        }
      }

    }

    $deportivo = new Deportivo();
    $deportivo->setVelocidad(100);
    ?>
  </body>
</html>
