<!--
    @Created on : 27-nov-2016, 22:09:54
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

    class Fecha {

      public $valor = "c";
      private $valor_privado = "c";

      public function ver_fecha() {
        echo date($this->valor_privado);
      }

    }

    $fecha1 = new Fecha();
    $ver = $fecha1->ver_fecha();
    echo $ver;
    ?>
  </body>
</html>
