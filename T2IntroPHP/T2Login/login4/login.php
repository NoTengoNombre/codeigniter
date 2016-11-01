<?php
include_once("seguridad.php");

class Login {

  /**
   * 
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
   * 
   */
  public function checkLogin() {
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "test");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $sql = "SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$p'";
    $result = $conex->query($sql);

    if ($result->num_rows > 0) {
      $s = new Seguridad();
      $s->setNombreUsuario($usuario);
// Le pongo este valor fijo, pero en vuestro sistema lo tendréis que sacar de la BD
      $s->setTipoUsuario("admin");
      echo "<script>location.href='index.php?do=showmenuadmin'</script>";
    } else {
      echo "Nombre de usuario o contraseña incorrecto<br/>";
      echo "<a href='..'>Volver</a>";
    }
    $result->free();
    $conex->close();
    echo "</body>";
    echo "</html>";
  }

}
