<!--
    @Created on : 21-oct-2016, 1:03:50
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:

                  También debe ser posible hacer un mantenimiento de la tabla Películas 
                  (Añadir, eliminar y modificar), pero ten cuidado, porque en este caso 
                  hay que enlazarla con la tabla Actúan para especificar los actores que trabajan en la película.

                  Escribe también el código PHP necesario para buscar una película 
                  cualquiera introduciendo su título, su género, el país o el nombre de cualquiera de sus actores.

                  El acceso a la aplicación tiene que estar controlado mediante 
                  una pantalla de login que solo permita acceder al programa a los usuarios registrados.
-->

<!--
/**
 * @todo...:
 * @access.:
 * @author.: Radwulf Candle
 * @example:
 * @see....:
 * @since..:
 * @package:
 */
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title> Formulario para recoger datos de Usuarios </title>
  </head>
  <body>
    <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
      <label><strong>Formulario para insertar datos</strong></label>
      <br><br>
      Id : <input type="text" name="id" value="">
      <br>
      User :  <input type="text" name="user" value="">
      <br>
      Pass :  <input type="text" name="pass" value="">
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </form> 
  </body>
</html>
<hr>

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
    echo "<b><br> Registros de la BD Usuarios </b>";
    if ($resultado->num_rows > 0) {
      echo '<br><i>Total de Registros</i> = ' . $numeroRegistros . ' ';
      echo '<hr>';
      echo "<table border='1'>"
      . "<tr>"
      . "<th> id </th>"
      . "<th> user </th>"
      . "<th> pass </th>"
      . "</tr>";
    } else {
      echo "<b>No hay registros <br> Comprueba los datos introducidos<br></b>";
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
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if (isset($_POST['id'])) {
      if (!empty($_POST['id'])) {
        $sql = "INSERT INTO usuarios (id,user,pass) VALUES ('" . $this->id . "','" . $this->user . "','" . $this->pass . "');";
        $inserccion = $mysqli->query($sql);
        if ($inserccion === true) {
          echo ("<em>Nueva Inserccion del Registro </em><br>");
        } else {
          echo ("<strong>No se Realizo Inserccion del Registro</strong> " . $mysqli->error . " <br>");
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
          echo "<strong>Consulta NO Realizada</strong><br>Comprueba que el <strong>id</strong> sea correcto.";
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
        $resultado = $db->query("DELETE FROM usuarios WHERE id = '$this->id';");
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

}

$us = new Usuarios();
if (isset($_POST['enviar'])) {
  echo $us->id = $_POST['id'];
  echo $us->user = $_POST['user'];
  echo $us->pass = $_POST['pass'];
//  $us->consultar_usuarios();
//  $us->anadir_usuarios();
//  $us->actualizar_usuarios();
  $us->borrar_usuarios();
}
?>


