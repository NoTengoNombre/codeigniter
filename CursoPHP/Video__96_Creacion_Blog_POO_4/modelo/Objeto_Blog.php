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
    <title></title>
  </head>
  <body>
    <?php

    class Objeto_Blog {

//      encapsulacion
      private $id;
      private $Titulo;
      private $Fecha;
      private $Comentario;
      private $Imagen;

//      metodos de acceso / get y set

      /**
       * Muestra la propiedad Id
       */
      public function getId() {
// $this - Hace referencia al objeto donde 
//         nos encontramos 
//         en este caso a la propia entrada del blog
//        seria : Objeto_Blog - Clase Objeto_Blog
// devuelveme el id del objeto , de la entrada de blog donde me encuentro 
        return $this->id;
      }

      /**
       * 
       * @param type $id - Valor que le voy a dar a la propiedad
       */
      public function setId($id) {
//      $this->Hace referencia a la propiedad id del objeto
//          -------- referencia al parametro pasado
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
       * @param type $titulo
       */
      public function setTitulo($titulo) {
        $this->Titulo = $titulo;
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
      public function setFecha($fecha) {
        $this->Fecha = $fecha;
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
      public function setImagen($imagen) {
        $this->Imagen = $imagen;
      }

    }
    ?>
  </body>
</html>
