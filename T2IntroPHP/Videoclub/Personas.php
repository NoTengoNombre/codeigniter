<!--
    @Created on : 20-oct-2016, 23:46:08
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
 
<?php

class Personas {

//   Atributos : Almacenan los valores del formulario cuando estos se envian
  public $cod_persona;
  public $nombre;
  public $apellidos;
  public $pais;

  /**
   *  ♥ SELECT Basico
   *  Solo muestra valores
   */
  public function consulta_basica($var0, $var1) {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion. " . $mysqli->connect_error);
    }
    $resultado = $mysqli->query("SELECT * FROM personas WHERE $var0 LIKE '$var1';");
    if ($resultado->num_rows > 0) {
      echo '<em><strong>Total de Personas Registradas</strong></em> = ' . $resultado->num_rows;
      echo "<br><table border='1'>"
      . "<tr>"
      . "<th> Cod_persona </th>"
      . "<th> Nombre </th>"
      . "<th> Apellidos </th>"
      . "<th> Pais </th>"
      . "</tr>";
    }
    while ($registro = $resultado->fetch_assoc()) {
      echo '<tr>'
      . '<td>' . $registro['cod_persona'] . '</td>'
      . '<td>' . $registro['nombre'] . '</td>'
      . '<td>' . $registro['apellidos'] . '</td>'
      . '<td>' . $registro['pais'] . '</td>'
      . '</tr>';
    }
    $mysqli->close();
  }

  /**
   * ♥ SELECT
   *  Funciona : Muestra todos los resultados 
   */
  public function consultar_personas() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if (isset($_REQUEST['cod_persona'])) {
      $sql = "SELECT * FROM personas WHERE cod_persona LIKE '" . $_REQUEST['cod_persona'] . "';";
      $resultado = $mysqli->query($sql);
      $numeroRegistros = $resultado->num_rows;
      if ($resultado->num_rows > 0) {
        echo '<br><em>Total de numeros de</em> = ' . $numeroRegistros . ' registros<br>';
        echo "<br><table border='1'>"
        . "<tr>"
        . "<th>Cod_persona </th>"
        . "<th>Nombre </th>"
        . "<th>Apellidos </th>"
        . "<th>Pais </th>"
        . "</tr>";
      } else {
        echo "<strong>No hay registros</strong><br>";
        echo "<strong>Comprueba los datos introducidos</strong><br>";
      }
      while ($registro = $resultado->fetch_assoc()) {
        echo '<tr>'
        . '<td>' . $registro['cod_persona'] . '</td>'
        . '<td>' . $registro['nombre'] . '</td>'
        . '<td>' . $registro['apellidos'] . '</td>'
        . '<td>' . $registro['pais'] . '</td>'
        . '</tr>';
      }
      $mysqli->close();
    }
  }

  /**
   * ♥ INSERT
   * Añadir peliculas
   */
  public function aniadir_personas() {
    $persona = new Personas();
    $persona->consulta_basica("cod_persona", "%");
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba"); //crea conexion
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if ((isset($_REQUEST['cod_persona']) && isset($_REQUEST['nombre'])) && (isset($_REQUEST['apellidos']) && isset($_REQUEST['pais']))) {
      $sql = "INSERT INTO personas(cod_persona,nombre,apellidos,pais) VALUES ('" . $_REQUEST["cod_persona"] . "','" . $_REQUEST["nombre"] . "','" . $_REQUEST["apellidos"] . "','" . $_REQUEST["pais"] . "');";
      $inserccion = $mysqli->query($sql);
      if ($inserccion === true) {
        echo "<br><em>Nueva Inserccion del Registro</em><br>";
      } else {
        echo "<strong><br>No se Realizo Inserccion del Registro</strong><br>";
        echo "<em>Atencion : No se pueden añadir campos <strong>vacios o nulos</strong></em><br>";
      }
    }
    $mysqli->close();
    echo "<a href='index.php'>Volver al indice</a>";
  }

  /**
   * ♥ UPDATE : Funciona
   * ! Ver como mostrar antes y despues el SELECT
   * 
   */
  public function actualizar_personas() {
    $persona = new Personas();
    $persona->consulta_basica("cod_persona", "%");
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if ((isset($_REQUEST['cod_persona']) && isset($_REQUEST['nombre'])) && (isset($_REQUEST['apellidos']) && isset($_REQUEST['pais']))) {
      $consulta = "UPDATE Personas SET nombre='" . $_REQUEST['nombre'] . "', apellidos='" . $_REQUEST['apellidos'] . "', pais='" . $_REQUEST['pais'] . "' WHERE cod_persona='" . $_REQUEST['cod_persona'] . "';";
//      echo "<br><strong>Consulta realizada : </strong> <br> Modo De Depuracion : <strong>" . $consulta . "</strong><br>";
      $inserccion = $mysqli->query($consulta);
      if ($inserccion === true) {
        echo "<hr><br>Tabla Anterior<br><br>";
        $persona->consulta_basica("cod_persona", "%");
        echo "<hr><br>Registro Actualizado<br>";
        echo "";
      } else {
        echo "Error en la actualizacion del registro: " . $mysqli->error;
      }
      $mysqli->close();
    }
  }

  /**
   * ♥ DELETE
   * Funciona Perfectamente
   */
  public function borrar_personas() {
    $persona = new Personas();
    $persona->consulta_basica("cod_persona", "%");
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("<br>Error : No se ha establecio la conexion. " . $mysqli->connect_error);
    }
    if (isset($_REQUEST['cod_persona'])) {
      $query = "DELETE FROM personas WHERE cod_persona='" . $_REQUEST['cod_persona'] . "';";
      if (($mysqli->query($query) === TRUE) && ($mysqli->affected_rows > 0)) {
        echo "nº Filas Afectadas : " . $mysqli->affected_rows;
        echo "<br><em>Registro Borrado</em><br>";
//        echo "Modo de Depuracion <strong> : " . $query . " </strong><br>";
      } else {
        echo "<br><strong>Error en el Borrado : </strong> " . $mysqli->errno . " coincidencias <br>";
      }
    } else {
      echo "<br>♦ Introduce el <strong>Cod_Persona</strong> en el campo correspondiente para borrar todos los datos<hr>";
    }
    $mysqli->close();
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_consultar_personas() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Persona " . "<input type='text' name='cod_persona' required><br>";
    echo "<input type='hidden' name='do' value='consultar_personas' />";
    echo "<input type='submit'>";
    echo "</form>";
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_insertar_personas() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Persona: " . "<input type='text' name='cod_persona' required><br>";
    echo "Nombre: " . "<input type='text' name='nombre' required><br>";
    echo "Apellidos: " . "<input type='text' name='apellidos' required><br>";
    echo "Pais: " . "<input type='text' name='pais' required><br>";
    echo "<input type='hidden' name='do' value='aniadir_personas'><br>";
    echo "<input type='submit'><br>";
    echo "</form>";
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_actualizar_personas() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Persona: " . "<input type='text' name='cod_persona' required><br>";
    echo "Nombre: " . "<input type='text' name='nombre' required><br>";
    echo "Apellidos: " . "<input type='text' name='apellidos' required><br>";
    echo "Pais: " . "<input type='text' name='pais' required><br>";
    echo "<input type='hidden' name='do' value='actualizar_personas'><br>";
    echo "<input type='submit'><br>";
    echo "</form>";
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_borrar_personas() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Persona: " . "<input type='text' name='cod_persona' required><br>";
    echo "<input type='hidden' name='do' value='borrar_personas'><br>";
    echo "<input type='submit'><br>";
    echo "</form>";
  }

}
