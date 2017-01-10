<!--
    @Created on : 06-ene-2017, 1:49:01
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

    class Prueba {

      private $num = 3;
      private $bool = true;
      private $array = [];
      private $cadena = "cadena";
      public $fecha = DateTime::ATOM;

      public function __construct() {
        $this->num = 5;
        $this->bool = false;
        $this->array;
        $this->cadena = "string";
      }

    }

    $p = new Prueba();
    $ver = $p->fecha;

    var_dump($ver);

    $f1 = new DateTime("now");

    echo $f1->getTimestamp();

//    $dtz = new DateTime("now", new DateTimeZone("UTC"));
//    $p->fecha;
//    var_dump($p->fecha);
    ?>
  </body>
</html>
