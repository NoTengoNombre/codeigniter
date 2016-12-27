<!--
    @Created on : 22-dic-2016, 18:21:15
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

    class Coche {

      var $motor;
      var $color;
      var $puertas;

      function Coche() {
//        Pone todos los valores por defecto 
        $this->motor; // 0 
        $this->color; // vacio -> ""
        $this->puertas; // 0
      }

      function girar() {
        echo "Coche ha girado";
      }

      function frenar() {
        echo "Coche ha frenado ";
      }

      function establecer_color($color_coche) {
        $this->color = $color_coche;
        echo "<p style='color: #f00;'>El color de este coche es : " . $this->color . '</p><br>';
      }

      function establecer_color2($color_coche, $nombre_coche) {
        $this->color = $color_coche;
        echo "<p style='color: #f00;'>El color de este " . $nombre_coche . " es : " . $this->color . '</p><br>';
      }

    }

    $renault = new Coche(); //estado inicial del objeto Coche

    $mazda = new Coche();

    $seat = new Coche();

//    Cambiar color a la instancia renault
    $renault->establecer_color("rojo");
    $mazda->establecer_color("verde");

    $renault->establecer_color2("rojo", "Renault");
    $mazda->establecer_color2("verde", "Madza");
    ?>
  </body>
</html>
