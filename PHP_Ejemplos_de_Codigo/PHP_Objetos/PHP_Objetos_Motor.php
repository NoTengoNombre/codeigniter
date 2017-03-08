<!--
    @Created on : 06-ene-2017, 17:02:37
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Motor</title>
  </head>
  <body>
    <?php

    class Motores {

      private $en_marcha;

      public function set_arrancar($en_marcha = true) {
        $this->en_marcha = $en_marcha;
      }

      public function get_arrancar() {
        return $this->en_marcha;
      }

      public function is_arrancar() {
        $this->en_marcha = true;
      }

      public function is_parar() {
        $this->en_marcha = false;
      }

    }
    ?>
  </body>
</html>
