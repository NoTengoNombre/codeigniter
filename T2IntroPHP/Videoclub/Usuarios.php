<!--
    @Created on : 21-oct-2016, 1:03:50
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:
-->
<?php

class Usuarios {

  public $id;
  public $user;
  public $pass;

  /**
   * ♥ Funciona 
   * muestra todos los resultados automaticamente
   */
  public function consultar_usuarios() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if (isset($_REQUEST['id'])) {
      $sql = "SELECT * FROM usuarios WHERE id='" . $_REQUEST['id'] . "';";
      $resultado = $mysqli->query($sql);
      $numeroRegistros = $resultado->num_rows;
      echo "<strong><br>Registros de la BD Usuarios</strong>";
      if ($resultado->num_rows > 0) {
        echo '<br><em>Total de Registros</em> = ' . $numeroRegistros;
        echo '<hr>';
        echo "<table border = '1'>"
        . "<tr>"
        . "<th> id </th>"
        . "<th> user </th>"
        . "<th> pass </th>"
        . "</tr>";
      } else {
        echo "<br>Numero de registros : " . $numeroRegistros;
      }
      while ($registro = $resultado->fetch_assoc()) {
        echo '<tr>'
        . '<td>' . $registro['id'] . '</td>'
        . '<td>' . $registro['user'] . '</td>'
        . '<td>' . $registro['pass'] . '</td>'
        . '</tr>';
      }
    }
    $mysqli->close();
    echo "<br><a href='index.php'>Volver al Indice</a>";
  }

  /**
   * ♥ Funciona 
   * inserta usuarios
   */
  public function anadir_usuarios() {
    $us = new Usuarios();
    $us->consultar_usuarios();
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion." . $mysqli->connect_error);
    }
    if (isset($_REQUEST['id']) && isset($_REQUEST['user']) && isset($_REQUEST['pass'])) {
      $sql = "INSERT INTO usuarios (id, user, pass) VALUES ('" . $_REQUEST['id'] . "','" . $_REQUEST['user'] . "','" . $_REQUEST['pass'] . "');";
      $inserccion = $mysqli->query($sql);
      if ($inserccion === true) {
        echo "<em><br>Nueva Inserccion del Registro </em><br>";
      } else {
        echo "<strong>No se realizo ninguna inserccion del registro</strong> " . $mysqli->error . "<br>";
      }
    }
    $mysqli->close();
  }

  /**
   * ♥ Funciona 
   * Actualizar
   */
  public function actualizar_usuarios() {
    $p = new Usuarios();
    $p->consultar_usuarios();
    echo "<br>";
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if (isset($_REQUEST['id']) && isset($_REQUEST['user']) && isset($_REQUEST['pass'])) {
      $sql = "UPDATE usuarios SET user='" . $_REQUEST['user'] . "', pass='" . $_REQUEST['pass'] . "' WHERE id='" . $_REQUEST['id'] . "';";
      $registro = $mysqli->query($sql);
      if ($registro === true) {
        echo "<strong>Consulta realizada</strong>";
      } else {
        echo "Actualizacion <strong>No Realizada</strong><br>Comprueba que el <strong>id</strong> sea correcto.";
        echo "<br>Posible error <strong>: " . $mysqli->error;
        echo "<hr>";
      }
    } else {
      echo "Valor de <strong>'id'</strong> esta vacio";
      echo "<br>Para hacer actualizaciones es necesarios introducir el <strong>'id'</strong>";
    }
    $mysqli->close();
  }

  /**
   * ♥ Funciona
   * Borra por id
   */
  public function borrar_usuarios() {
    $p = new Usuarios();
    $p->consultar_usuarios();
    $db = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($db->connect_errno) {
      die("<br>Error : No se establecio la conexion. " . $db->connect_error);
    }
    if (isset($_REQUEST['id'])) {
      $sql = "DELETE FROM usuarios WHERE id ='" . $_REQUEST['id'] . "';";
      $resultado = $db->query($sql);
      if ($resultado === true) {
        echo "<br>Registro Borrado <strong>CON EXISTO</strong>";
      } else {
        echo "<br>Registro Borrado <strong>SIN EXISTO</strong>";
      }
    }
    $db->close();
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_consultar_usuario() {
    echo "<form method = 'get' action = 'index.php'>";
    echo "Id : " . "<input type = 'text' name = 'id' required><br>";
    echo "<input type = 'hidden' name = 'do' value = 'consultar_usuarios'><br>";
    echo "<input type = 'submit'><br>";
    echo "</form>";
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_aniadir_usuario() {
    echo "<form method = 'get' action = 'index.php'>";
    echo "Id : " . "<input type = 'text' name = 'id' required><br>";
    echo "User : " . "<input type = 'text' name = 'user' required><br>";
    echo "Pass : " . "<input type = 'password' name = 'pass' required><br>";
    echo "<input type = 'hidden' name ='do' value ='anadir_usuarios'><br>";
    echo "<input type = 'submit'><br>";
    echo "</form>";
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_actualizar_usuario() {
    echo "<form method = 'get' action = 'index.php'>";
    echo "Id : " . "<input type = 'text' name = 'id' required><br>";
    echo "User : " . "<input type = 'text' name = 'user' required><br>";
    echo "Pass : " . "<input type = 'text' name = 'pass' required><br>";
    echo "<input type = 'hidden' name ='do' value ='actualizar_usuarios'><br>";
    echo "<input type = 'submit'><br>";
    echo "</form>";
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario_borrar_usuario() {
    echo "<form method = 'get' action = 'index.php'>";
    echo "Id : " . "<input type = 'text' name = 'id' required><br>";
    echo "<input type = 'hidden' name ='do' value ='borrar_usuarios'><br>";
    echo "<input type = 'submit'><br>";
    echo "</form>";
  }

}
