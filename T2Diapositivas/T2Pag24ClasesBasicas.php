<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 21:41:38
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

    class MiClase {

      public $var = "soy una variable de clase";

      public function mostrarVar() {
        // Este objeto 
        echo $this->var;
      }

      private function resetVar() {
        $this->var = '';
      }

    }

////////////////////////////////////////////////////////////////    
    $miObjeto = new MiClase();
    $miObjeto->mostrarVar();
    ?>
  </body>
</html>