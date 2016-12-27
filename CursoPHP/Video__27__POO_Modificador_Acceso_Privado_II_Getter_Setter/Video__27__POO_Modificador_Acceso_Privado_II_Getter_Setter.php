<!--
    @Created on : 22-dic-2016, 20:42:16
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

//    private $ruedas; // No esta visible en la clase Camion
      protected $ruedas; // Esta visible en la clase Camion
      var $color;
      protected $motor;

      function Coche() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
      }

      /**
       * Solo se puede acceder desde los objetos instanciados desde otra clase
       * 
       * Este metodo lo hereda tambien Clase Camion pero no devuelve valor
       * porque la ruedas estan encapsuladas en la Clase Coche y clase Camion
       * no tiene el atributo definido "no es accesible desde la clase Camion"
       * 
       * No puede acceder no es visible 
       * 
       * Para poderlo usar en la clase Camion la variable ruedas 
       * tengo que ponerlo protected en la clase Coche
       *  
       * @return type
       */
      function get_ruedas() {
//      Ahora podemos acceder a las variables de la clase
        return "<span style='color: #f00'>" . $this->ruedas . "</span>";
      }

      /**
       * Metodo que devuelve/referencia
       * el atributo protected de la clase Coche
       * @return type
       */
      function get_motor() {
        return $this->motor;
      }

      /**
       * 
       * @param type $ruedas
       */
      function set_ruedas($ruedas) {
        "<span style='color: #f00'>" . $this->ruedas = $ruedas . "</span>";
      }

      function set_color($color) {
        "<span style='color: #f00'>" . $this->color = $color . "</span>";
      }

      public function arrancar() {
        echo "Arranca Coche";
      }

      public function girar() {
        echo "Girar Coche";
      }

      public function frenar() {
        echo "Frenar Coche";
      }

      public function establecer_color($color_coche, $nombre_coche) {
        $this->color = $color_coche;
        echo "El color del coche es : " . $nombre_coche . " es " . $this->color . "<br>";
      }

    }

//    ----------------------------------------------------------------

    class Camion extends Coche {

      function Camion() {
        $this->ruedas = 8;
      }

      function establece_color($color_camion, $nombre_camion) {
        $this->color = $color_camion;
        echo "El color de : " . $nombre_camion . " y el nombre es " . $this->color . "<br>";
      }

      function arrancar() {
        // Hereda el metodo de la clase principal
        parent::arrancar();
        echo "<p style='color :#00f'>Camion Arrancado</p>";
      }

    }
    ?>
  </body>
</html>
