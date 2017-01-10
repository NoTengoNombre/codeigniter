<!--
    @Created on : 06-ene-2017, 20:48:44
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

    function hacer_cafe($tipos = array("capuchino"), $fabricanteCafe = null) {
      $aparato = is_null($fabricanteCafe) ? "las manos" : $fabricanteCafe;
      return "Hacer una taza de " . join(", ", $tipos) . " con $aparato .\n";
    }

    echo '<hr>';
    echo hacer_cafe();
    echo hacer_cafe(array("capuchino", "lavazza"), "una tetera");
    echo '<hr>';

    function hacer_cafe2($tipos = array("capuchino"), $fabricanteCafe = "molinillo") {
      $aparato = is_null($fabricanteCafe) ? "las manos" : $fabricanteCafe;
      return "Hacer una taza de " . join(", ", $tipos) . " con $aparato .\n";
    }

    echo hacer_cafe2();
    echo '<hr>';
    echo hacer_cafe2(array("capuchino", "lavazza"), null);
    echo '<hr>';
    echo hacer_cafe2(array("capuchino", "lavazza"));
    echo '<hr>';
    ?>
  </body>
</html>
