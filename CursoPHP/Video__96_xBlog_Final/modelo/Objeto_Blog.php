<!--
    @Created on : 30-dic-2016, 20:23:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Objeto blog</title>
  </head>
  <body>
    <?php

    class Objeto_Blog {

//      encapsulacion
//      Propiedades del objeto BLOG
      private $id;
      private $Titulo;
      private $Fecha;
      private $Comentario;
      private $Imagen;

//    metodos de acceso / get y set
      public function getId() {
        return $this->id;
      }

      /**
       * 
       * @param type $id - Valor que le voy a dar a la propiedad
       */
      public function setId($id) {
        $this->id = $id;
      }

      /**
       * 
       * @return type
       */
      public function getTitulo() {
        return $this->Titulo;
      }

      /**
       * 
       * @param type $Titulo
       */
      public function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
      }

      /**
       * 
       * @return type
       */
      public function getFecha() {
        return $this->Fecha;
      }

      /**
       * 
       * @param type $fecha
       */
      public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
      }

      /**
       * 
       * @return type
       */
      public function getComentario() {
        return $this->Comentario;
      }

      /**
       * 
       * @param type $comentario
       */
      public function setComentario($comentario) {
        $this->Comentario = $comentario;
      }

      /**
       * 
       * @return type
       */
      public function getImagen() {
        return $this->Imagen;
      }

      /**
       * 
       * @param type $imagen
       */
      public function setImagen($Imagen) {
        $this->Imagen = $Imagen;
      }

    }
    ?>
  </body>
</html>
