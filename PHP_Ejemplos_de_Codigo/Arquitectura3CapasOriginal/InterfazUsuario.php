<!--
    @Created on : 15-dic-2016, 9:54:18
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

    class InterfazUsuario {

      // Muestra una pantalla de presentación de la aplicación
      public function mostrarPantallaInicial() {
        echo "<h1>Bienvenido a Simon</h1><br/>";
        echo "Le mostraré una secuencia creciente de números del 1 al 4.<br/>";
        echo "El objetivo es que usted trate de recordarla y repetirla después de verla durante unos instantes.<br/>";
        echo "<a href='index.php?accion=iniciar'>Haga clic para empezar</a>";
      }

      // Muestra una secuencia de números durante $tiempo segundos. Después vuelve a cargar index.php
      public function mostrarSecuencia($sec, $tiempo) {
        echo "<meta http-equiv='refresh' content='$tiempo;index.php?accion=mostrarForm'>";
        echo "<h1>";
        foreach ($sec as $valor)
          echo $valor;
        echo "</h1>";
      }

      // Muestra el formulario para que el usuario indroduzca la secuencia de números
      public function mostrarFormulario() {
        echo "<form action='index.php'>¿Recuerdas la secuencia?";
        echo "<input type='text' name='secuencia' size='5'/><br/>";
        echo "<input type='hidden' name='accion' value='comprobarSecuencia'>";
        echo "<input type='submit' value='Comprobar'/></form>";
        echo "<a href='index.php'>Reiniciar el juego</a>";
      }

      // Muestra el resultado de la comparación entre la secuencia de Simon y la secuencia del usuario
      public function mostrarResultado($res) {
        if ($res == -1) {
          echo "<h3>HAS FALLADO</h3></br>";
          echo "<a href='index.php?accion=iniciar'>Volver a jugar</a>";
        }
        if ($res == 0) {
          echo "<h3>Enhorabuena, has acertado</h3></br>";
          echo "<a href='index.php?accion=incrementarSecuencia'>Continuar...</a>";
        }
      }

    }
    ?>
  </body>
</html>
