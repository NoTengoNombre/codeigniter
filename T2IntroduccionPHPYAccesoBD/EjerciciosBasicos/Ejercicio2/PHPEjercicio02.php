<!DOCTYPE html>
<!--
    @Created on : 10-oct-2016, 19:02:37
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Enviar</title>
    <!--<link rel="stylesheet" href="css/micssBasico.css">-->
  </head>
  <body>
    <?php
    echo "Tabla Multiplicar : " . $_REQUEST['numero'];
    if (isset($_REQUEST['enviar']) && $_REQUEST['numero'] != '') {
      if ($_REQUEST['numero'] >= 0) {
        for ($numero = 0; $numero <= 10; $numero++) {
          echo "<br>";
          echo $_REQUEST['numero'] . " x " . $numero . " = " . $_REQUEST['numero'] * $numero;
        }
      }
    }
    if (isset($_REQUEST['enviar'])) {
      echo '<br />';
      echo '<a href="http://localhost/DWES_PHP/T2IntroduccionPHPYAccesoBD/EjerciciosBasicos/Ejercicio2/Ejercicio02.html" title="Volver a la pagina anterior">Volver</a>';
    }
    ?>
  </body>
</html>
