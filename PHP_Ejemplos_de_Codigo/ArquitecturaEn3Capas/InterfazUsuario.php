<!--
    @Created on : 14-dic-2016, 22:11:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://iescelia.org/aulavirtual/mod/page/view.php?id=2260
    @version    : 
    @TODO       : href - hyperlink reference
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

      public function mostrarFormulario() {
        echo "<form action='index.php'>¿Recuerdas la secuencia?";
        echo "<input type='text' name='secuencia' size='5'/><br/>";
        echo "<input type='hidden' name='accion' value='comprobarSecuencia'>";
        echo "<input type='submit' value='Comprobar'/></form>";
        echo "<a href='index.php'>Reiniciar el juego</a>";
      }

      public function mostrarResultado($res) {
        if ($res == -1) {
          echo "<h3>Has fallado</h3></br>";
          echo "<a href='index.php?accion=iniciar'>Volver a jugar</a>";
        }
        if ($res == 0) {
          echo "<h3>Enhorabuena </h3><br>";
          echo "<a href='index.php?accion=incrementarSecuencia'>Continuar...</a>";
        }
      }

    }
    ?>
  </body>
</html>
