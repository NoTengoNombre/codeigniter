<!--
    @Created on : 06-ene-2017, 18:59:41
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Casa</title>
  </head>
  <body>
    <?php

    class Casa {

      private $color;
      private $tamanio;
      private $habitada;

      public function __construct() {
        $this->color = "verde";
        $this->tamanio = 100;
        $this->habitada = false;
      }

      public function __construct1($color, $tamanio, $habitada) {
        $this->color = $color;
        $this->tamanio = $tamanio;
        $this->habitada = $habitada;
      }

      public function set_color($color) {
        $this->color = $color;
      }

      public function get_color() {
        return $this->color;
      }

      public function set_tamanio($tamanio) {
        $this->tamanio = $tamanio;
      }

      public function get_tamanio() {
        return $this->tamanio;
      }

      /**
       * Metodo Casa 
       * 
       * Necesita objeto persona
       * 
       * @param type $habitada
       * @param Persona_casa $persona
       * @param type $numero_personas
       * @return type habilitada "boolean"
       */
      public function set_habitada($habitada, Persona_casa $persona, $numero_personas) {
        $estado_persona = $persona->get_estado();

        if ($estado_persona || $numero_personas > 0) {
          $this->habitada = $habitada;
          return $this->habitada;
        } else {
          return $this->habitada;
        }
      }

      public function get_habitada() {
        return $this->habitada;
      }

    }
    ?>
  </body>
</html>
