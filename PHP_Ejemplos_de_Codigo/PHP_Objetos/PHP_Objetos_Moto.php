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
    <title></title>
  </head>
  <body>
    <?php

    class Moto {

      private $velocidad;
      private $en_marcha;

      public function arrancar() {
        $this->en_marcha = true;
      }

      public function parar() {
        $this->en_marcha = false;
      }

      public function acelerar($velocidad) {
        $this->velocidad += $velocidad;
      }

      public function get_acelerar() {
        return $this->velocidad;
      }

      public function frenar($velocidad) {
        $this->velocidad -= $velocidad;
      }

      public function ver_velocidad() {
        echo "SOY MOTO : " . $this->velocidad;
      }

    }

    echo '<hr>';
    $mimoto1 = new Moto();
    $mimoto1->acelerar(20);
    $mimoto1->ver_velocidad();
    echo '<hr>';
    ?>
  </body>
</html>








