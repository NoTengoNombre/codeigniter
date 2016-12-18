<?php
include_once("seguridad.php");

class Login {

  /**
   * Envia los datos al index.php
   */
  public function showForm() {
    ?>
    <html>
      <head><title>Login</title></head>
      <body>
        <h3>Login sencillo con PHP</h3>
        <form action="index.php" method="GET">
          Usuario:
          <input type="text" name="usuario" />
          <br/>
          Contraseña:
          <input type="text" name="passwd" />
          <br/>
          <!--Enviar datos del formulario al switch--> 
          <input type="hidden" name="do" value="checklogin"/>
          <input type="submit"/>
        </form>
      </body>
    </html>
    <?php
  }

  /**
   * Comprueba los datos enviados desde el index.php
   */
  public function checkLogin() {
    $usuario = $_REQUEST["usuario"]; //peticion
    $password = $_REQUEST["passwd"]; //peticion

    $conex = new mysqli("localhost", "root", "", "videoclub");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $sql = "SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$password'";

    $result = $conex->query($sql);

    if ($result->num_rows > 0) { // si hay usuarios
      $s = new Seguridad(); // creo objeto '$s' de la clase Seguridad
      $s->setNombreUsuario($usuario); // objeto '$s' el valor del $_REQUEST["usuario"] del formulario
      $s->setTipoUsuario("admin"); // Le   pongo este valor fijo, pero en vuestro sistema lo tendréis que sacar de la BD
      echo "<script>location.href='index.php?do=showmenuadmin'</script>"; // redirijo al showmenuadmin
    } else {
      echo "Nombre de usuario o contraseña incorrecto<br/>";
      echo "<a href='index.php'>Volver</a>";
    }
    $result->free();
    $conex->close();
    echo "</body>";
    echo "</html>";
  }

}
