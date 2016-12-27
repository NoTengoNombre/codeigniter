<!--
    @Created on : 23-dic-2016, 0:45:36
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

    class Compra_Vehiculo2 {

      private $precio_base;
      private static $ayuda = 0;

      function Compra_Vehiculo2($gama) {
        if ($gama == "urbano") {
          $this->precio_base == 10000;
        } else if ($gama == "compacto") {
          $this->precio_base == 20000;
        } else if ($gama == "berlina") {
          $this->precio_base == 30000;
        }
      }

      function navegador_gps() {
        $this->precio_base += 2500;
      }

      /**
       * Metodo static 
       * self::Referencia_atributo_static
       */
      static function descuento_gobierno() {
        if (date("m-d-y") > "05-01-17") {
          self::$ayuda = 4500;
        }
      }

      function climatizador() {
        $this->precio_base += 2000;
      }

      function tapiceria_cuero($color) {
        if ($color == "blanco") {
          $this->precio_base += 3000;
        } else if ($color == "beige") {
          $this->precio_base += 3500;
        } else {
          $this->precio_base += 5000;
        }
      }

      function precio_final() {
        $valor_final = $this->precio_base - self::$ayuda;
        return $valor_final;
      }

    }
    ?>
  </body>
</html>
