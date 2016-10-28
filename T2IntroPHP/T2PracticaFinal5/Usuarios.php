<!--
    @Created on : 21-oct-2016, 1:03:50
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:

                  Escribe también el código PHP necesario para buscar una película 
                  cualquiera introduciendo su título, su género, el país o el nombre de cualquiera de sus actores.

                  El acceso a la aplicación tiene que estar controlado mediante 
                  una pantalla de login que solo permita acceder al programa a los usuarios registrados.
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
    $resultado = $mysqli->query("SELECT * FROM usuarios");
    $numeroRegistros = $resultado->num_rows;
    echo "<strong><br>Registros de la BD Usuarios</strong>";
    if ($resultado->num_rows > 0) {
      echo '<br><em>Total de Registros</em> = ' . $numeroRegistros . ' ';
      echo '<hr>';
      echo "<table border='1'>"
      . "<tr>"
      . "<th> id </th>"
      . "<th> user </th>"
      . "<th> pass </th>"
      . "</tr>";
    } else {
      echo "<strong>No hay registros <br> Comprueba los datos introducidos<br></strong>";
    }
    while ($registro = $resultado->fetch_assoc()) {
      echo '<tr>'
      . '<td>' . $registro['id'] . '</td>'
      . '<td>' . $registro['user'] . '</td>'
      . '<td>' . $registro['pass'] . '</td>'
      . '</tr>';
    }
    $mysqli->close();
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
    if (isset($_POST['id'])) {
      if (!empty($_POST['id'])) {
        $sql = "INSERT INTO usuarios (id,user,pass) VALUES ('" . $this->id . "','" . $this->user . "','" . $this->pass . "');";
        $inserccion = $mysqli->query($sql);
        if ($inserccion === true) {
          echo "<em>Nueva Inserccion del Registro </em><br>";
        } else {
          echo "<strong>No se realizo Inserccion del Registro</strong> " . $mysqli->error . "<br>";
        }
      } else {
        echo "<br>No se puede hacer insercciones en campos vacios";
        $mysqli->close();
      }
    }
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
    if (isset($_REQUEST['id'])) {
      if (!empty($_REQUEST['id'])) {
        $registro = $mysqli->query("UPDATE usuarios SET user ='" . $this->user . "' , pass ='" . $this->pass . "' WHERE id ='" . $this->id . "';");
        if ($registro === true) {
          echo "<strong>Consulta realizada</strong>";
        } else {
          echo "Consulta <strong>NO Realizada</strong><br>Comprueba que el <strong>id</strong> sea correcto.";
          echo "<br>Posible error <strong>: " . $mysqli->error;
          echo "<hr> ";
        }
      } else {
        echo "Valor de <strong>'id'</strong> esta vacio";
        echo "<br>Para hacer actualizaciones es necesarios introducir el <strong>'id'</strong>";
      }
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
      die(" <br> Error : No se establecio la conexion . " . $db->connect_error);
    }
    if (isset($_REQUEST['id'])) {
      if (!empty($_REQUEST['id'])) {
        $resultado = $db->query("DELETE FROM usuarios WHERE id= '$this->id';");
        if ($resultado === true) {
          echo "<br>Registro Borrado <strong>CON EXISTO</strong>";
          $db->close();
        }
      } else {
        echo "<br>Registro <strong>NO Borrado</strong><br>";
        echo "<br>Posible error <strong>: " . $db->error . "</strong>";
        $db->close();
      }
    } else {
      echo " <br> Sin Accceso al Registro <br> Introduce el <b>id</b> en el campo <b>id</b> ";
    }
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario() {
    echo "<form name='form_peliculas' method='get' action='index.php'>";
    echo "Id : " . "<input type='text' name='id'><br>";
    echo "User : " . "<input type='text' name='user'><br>";
    echo "Pass : " . "<input type='text' name='pass'><br>";
    echo "<input type='hidden' name='accion' value='inserta' />";
    echo "<input type='submit' name='formfunc' value='enviar'><br>";
    echo "</from>";
  }

}
