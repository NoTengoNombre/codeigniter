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
        $this->motor = 2600;
        $this->color = "";
        $this->ruedas = 4;
      }

      function arrancar() {
        echo "<p style='color: #f00;'>Estoy Arrancando el Coche</p><br>";
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

//    -----------------------------------------------------------------
    class Camion {

      var $motor;
      var $color;
      var $ruedas;

      /**
       * Constructor
       */
      function Camion() {
        $this->motor = 2600;
        $this->color = "";
        $this->ruedas = 8;
      }

      function arrancar() {
        echo "<p style='color: #00f;'>Estoy Arrancando el Camion</p><br>";
      }

      function girar() {
        echo "<p style='color: #00f;'>Camion ha girado</p><br>";
      }

      function frenar() {
        echo "<p style='color: #00f;'>Camion ha frenado</p><br>";
      }

      function establecer_color($color_camion) {
        $this->color = $color_camion;
        echo "<p style='color: #00f;'>El color de este camion 1 es : " . $this->color . '</p><br>';
      }

      function establecer_color2($color_camion, $nombre_camion) {
        $this->color = $color_camion;
        echo "<p style='color: #00f;'>El color de este " . $nombre_camion . " es : " . $this->color . '</p><br>';
      }

    }
    ?>
  </body>
</html>
