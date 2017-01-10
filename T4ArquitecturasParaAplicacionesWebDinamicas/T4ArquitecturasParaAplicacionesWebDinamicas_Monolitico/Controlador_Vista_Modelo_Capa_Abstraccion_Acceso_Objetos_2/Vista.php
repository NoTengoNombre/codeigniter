<!--
    @Created on : 15-dic-2016, 21:52:19
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
    <h1>Vista</h1>
    <?php

    class Vista {

      /**
       * Set Render
       * 
       * @param type $view
       * @param type $data
       */
      public function render($view, $data) {
        include "vistas/" . $view . ".php";
      }

      /**
       *  Llamada a la Vista
       * 
       * @param type $data 
       */
      public function mostrarLista($data) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Id_Usuario</th>";
        echo "<th>Titulo</th>";
        echo "</tr>";
        foreach ($data as $fila) {
          echo '<tr>';
          echo '<td>' . $fila['id_usuario'] . '</td>';
          echo '<td>' . $fila['nombre_usuario'] . '</td>';
          echo '</tr>';
        }
        echo '</table>';
      }

    }
    ?>
  </body>
</html>
