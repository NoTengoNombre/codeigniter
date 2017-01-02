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

    }
    ?>
  </body>
</html>
