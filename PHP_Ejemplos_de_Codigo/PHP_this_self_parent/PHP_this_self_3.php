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

    class Funcion {

      private $valor_no_estatico = "valor_no_estatico<br>";
      private static $valor_estatico = "<br>valor_estatico";

      function __construct() {
        echo $this->valor_no_estatico . ' ' . self::$valor_estatico;
      }

    }

    $objeto = new Funcion();
    ?>
  </body>
</html>
