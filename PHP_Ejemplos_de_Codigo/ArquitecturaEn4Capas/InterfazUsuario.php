<!--
    @Created on : 15-dic-2016, 10:10:27
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

      // Muestra el formulario inicial
      public function formInicial() {
        echo "<h1>Bienvenido a Abulafia</h1><br/>";
        echo "Voy a crear una historia para usted.<br/>";
        echo "Puede ser una historia absurda o sugerente, depende de su imaginación. Sólo dígame el número de frases que desea obtener y yo haré el resto.<br/>";
        echo "<form action='index.php'><input type='text' name='size' value='3'/><input type='submit'/></form>";
      }

      // Muestra el texto generado al azar
      public function mostrar($sec) {
        echo "<h1>Esta es la historia...</h1>";
        echo "<p>$sec</p>";
        echo "<a href='index.php'>Volver</a>";
      }

    }
    ?>
  </body>
</html>
