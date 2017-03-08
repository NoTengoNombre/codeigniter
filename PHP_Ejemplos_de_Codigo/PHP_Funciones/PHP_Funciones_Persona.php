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
    <title>Personas </title>
  </head>
  <body>
    <?php

    class Persona_casa {

      private $nombre;
      private $edad;
      private $dentro_casa;
      private $estado;
      private $soltero;

      public function __construct() {
        $this->nombre = "Anonimo";
        $this->edad = 0;
        $this->estado = false;
      }

      public function set_nombre($nombre) {
        $this->nombre = $nombre;
      }

      public function get_nombre() {
        return $this->nombre;
      }

      public function set_estado($estado) {
        $this->estado = $estado;
      }

      public function get_estado() {
        return $this->estado;
      }

      /**
       * Metodo Clase Persona
       * 
       * Comprueba si hay alguien dentro de la casa
       * 
       * @param Casa $casa
       * 
       * @return type
       */
      public function persona_dentro_casa(Casa $casa) {
//      variable local
        $esta_dentro = $casa->get_habitada();
        if ($esta_dentro) {
          echo "<br>Hay personas dentro de la casa";
          return $this->dentro_casa; // atributo clase
        } else {
          echo "<br>No hay personas dentro de la casa";
          return $this->dentro_casa;
        }
      }

    }
    ?>
  </body>
</html>
