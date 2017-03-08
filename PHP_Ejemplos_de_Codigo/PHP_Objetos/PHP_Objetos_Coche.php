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

    class Coche1 {

      private $velocidad;
      private $en_marcha;

      public function arrancar() {
        $this->en_marcha = null;
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
        echo " SOY COCHE : " . $this->velocidad;
      }

    }

//    Ejemplo de objetos de la misma CLASE 
//    mandandose mensajes
    $micoche1 = new Coche1();
    $micoche1->acelerar(20);
    $micoche1->ver_velocidad();
//    echo '<hr>';
//    $micoche2 = new Coche1();
//    $micoche2->acelerar($micoche1->get_acelerar());
//    $micoche2->ver_velocidad();
//    echo '<hr>';
//    $micoche3 = new Coche1();
//    $micoche3->acelerar($micoche2->get_acelerar());
//    $micoche3->ver_velocidad();
    ?>
  </body>
</html>
