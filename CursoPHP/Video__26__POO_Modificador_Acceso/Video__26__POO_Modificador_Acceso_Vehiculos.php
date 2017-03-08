<!--
    @Created on : 22-dic-2016, 20:24:57
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

//      Solo accesible desde la propia clase
      private $ruedas;
//      Solo accesible desde la propia clase
      var $color;
//      Solo accesible desde la propia clase
      var $motor;

      /**
       * Metodo Constructor
       * Estado inicial 
       */
      function Coche() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
      }

      function arrancar() {
        echo "Estoy arrancando<br>";
      }

      function girar() {
        echo "Estoy girando<br>";
      }

      function frenar() {
        echo "Estoy frenando<br>";
      }

      function establece_color($color_coche, $nombre_coche) {
        $this->color = $color_coche;
        echo "El color de " . $nombre_coche . " es " . $this->color . "<br>";
      }

    }

//    -------------------------------------------------------------
    class Camion extends Coche {

      function Camion() {
        $this->ruedas = 8;
      }

      function establece_color($color_camion, $nombre_camion) {
        $this->color = $color_camion;
        echo "El color de : " . $nombre_camion . " es " . $this->color . "<br>";
      }

      function arrancar() {
        parent::arrancar();
        echo "<p style='color:#0f0;'>Camion Arrancado</p>";
      }

    }
    ?>
  </body>
</html>
