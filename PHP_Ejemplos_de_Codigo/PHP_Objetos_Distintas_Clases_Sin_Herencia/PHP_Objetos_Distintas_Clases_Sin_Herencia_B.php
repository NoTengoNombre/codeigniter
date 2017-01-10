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

    class Clase_BB {

      private $valor_B;

//      public function __construct() {
//        $this->valor_B = "<b>Soy B</b>";
//      }

      public function llamada_b(Clase_AA $a) {
        echo get_class($a) . "\n";
        var_dump($a);
      }

    }
    ?>
  </body>
</html>
