<!--
    @Created on : 20-oct-2016, 21:35:33
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<?php

class Login {

  public function showForm() {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title></title>
        <meta charset="UTF-8">
      </head>
      <body>
        <h3>Login sencillo con PHP</h3>
        <form action="index.php" method="get">
          Usuario : 
          <input type="text" name="usuario" />
          Contrasenia : 
          <input type="password" name="passwd" />
          <br />
          <input type="submit" />
        </form>
      </body>
    </html>

    <?php
  }

  public function checkLogin() {
    echo "<html> 
            <head>
              <title>Login sencillo con PHP</title>
              </head>
              <body>";
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];
    if (($usuario == "a") && ($p == "123")) {
      echo "Bienvenido a la web Usuario :  <strong>  " . $usuario . "</strong><br />";
      echo "<a href='bienvenido.php'> Volver al index </a>";
    } else {
      echo "Nombre de usuario o contraseñia incorrecta <br />";
      echo "<a href='index.php'>♦ Volver index </a>";
    }
    echo "</body>";
    echo "</html>";
  }

}
