<!--
    @Created on : 19-oct-2016, 17:46:20
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:

-->
<?php

class Actuan {

  public $cod_pelicula;
  public $cod_persona;

  public function consultar_actuan() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      echo ("Error en la conexion: " . $mysqli->connect_error);
    } else {
      $resultado = $mysqli->query("SELECT * FROM actuan WHERE cod_persona = '" . $this->cod_persona . "' or cod_pelicula = '" . $this->cod_pelicula . "';");
      $numeroRegistros = $resultado->num_rows;
      if ($resultado->num_rows > 0) {
        echo "<br><em> Total de numeros de Registro </em>" . $numeroRegistros;
        echo "<hr>";
        echo "<table border='2'>"
        . "<tr>"
        . "<th> cod_pelicula </th>"
        . "<th> cod_persona </th>"
        . "</tr>";
      } else {
        echo "<br><strong>No hay Registros</strong><br>"
        . "<em>Comprueba los datos introducidos</em><br>";
      }
      while ($registro = $resultado->fetch_assoc()) {
        echo '<tr>';
        foreach ($registro as $campo) {
          echo '<td>', $campo, '</td>';
        }
        echo '</tr>';
      }
      echo '</table>';
      $mysqli->close();
    }
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Pelicula: " . "<input type='text' name='cod_pelicula'><br>";
    echo "Cod Persona: " . "<input type='text' name='cod_persona'><br>";
    echo "<input type='hidden' name='accion' value='consultar_actuan'/>";
    echo "<input type='submit'/><br>";
    echo "</form>";
  }

}
