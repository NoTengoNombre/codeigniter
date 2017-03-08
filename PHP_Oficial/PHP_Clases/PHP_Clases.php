<!--
    @Created on : 27-nov-2016, 23:01:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.oop5.basic.php#language.oop5.basic.class.this
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

    class ClaseSencilla {

      public $var = 'un valor predeterminado';

      public function mostrarVar() {
        echo $this->var;
      }

    }
    ?>
  </body>
</html>
