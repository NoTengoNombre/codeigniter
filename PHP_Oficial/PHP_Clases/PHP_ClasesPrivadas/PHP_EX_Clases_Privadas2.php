<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 21:57:56
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Usuario {

//      Pero si son privados, 
//      ¿cómo accedemos a los atributos? 
//      La solución es crear métodos, 
//      funciones propias de la clase, 
//      pública que accedan al atributo.
      private $id;
      private $nombre;
      private $apellidos;
      private $codigoPostal;

      function getId() {
        return $this->id;
      }

      function setId() {
        $this->id = $id;
      }

      function getNombre() {
        return $this->nombre;
      }

      function setNombre($nombre) {
        $this->nombre = $nombre;
      }

      function getApellidos() {
        return $this->apellidos;
      }

      function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
      }

      function getCodigoPostal() {
        return $this->codigoPostal;
      }

      function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;
      }

    }
    ?>
  </body>
</html>
