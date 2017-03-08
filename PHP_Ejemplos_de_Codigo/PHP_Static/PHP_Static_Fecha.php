<!--
    @Created on : 07-ene-2017, 1:23:54
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Static</title>
  </head>
  <body>
    <?php

    class Date_f {

      public static function getFecha() {
        $anio = date("Y");
        $mes = date("m");
        $dia = date("d");
        return $dia . '/' . $mes . '/' . $anio;
      }

      public static function getHora() {
        $hora = date('H');
        $minutos = date('i');
        $segundos = date('s');
        return $hora . ':' . $minutos . ':' . $segundos;
      }

    }
    ?>
  </body>
</html>
