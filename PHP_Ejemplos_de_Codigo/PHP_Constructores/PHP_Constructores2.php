<!--
    @Created on : 06-ene-2017, 20:19:37
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

    class Varios_Constructores {

      function __construct($nombre = null, $apellido = null, $edad = null) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
      }

    }

    $v = new Varios_Constructores("n");
    var_dump($v);

    $v1 = new Varios_Constructores("n", "a");
    var_dump($v1);

    $v2 = new Varios_Constructores("n", "a", "e");
    var_dump($v2);

    $v3 = new Varios_Constructores(null, "a", "e");
    var_dump($v3);
    ?>
  </body>
</html>
