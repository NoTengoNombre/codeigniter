<!--
    @Created on : 06-ene-2017, 21:09:04
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

    class Clase_AA {

      private $valor_A;

//      public function __construct() {
//        $this->valor_A = "<b>Soy A</b>";
//      }

      public function llamada_a(Clase_BB $b) {
        echo get_class($b) . "\n";
        var_dump($b);
      }

    }
    ?>
  </body>
</html>
