<?php

class Login {

  /**
   * 
   */
  public function showForm() {
    ?>
    SOY ARCHIVO LOGIN : ESTOY FUERA DE LAS ETIQUETAS de PHP
    <html>
      <head><title>Login 2</title></head>
      <body>
        <h3>Login sencillo con PHP</h3>
        <form action="index.php" method="get">
          Usuario:
          <input type="text" name="usuario" />
          <br/>
          Contraseña:
          <input type="password" name="passwd" />
          <br/>
          <input type="submit"/>
        </form>
      </body>
    </html>
    <?php
  }

  /**
   * Comprueba el formulario basico
   */
  public function checkLogin() {
    echo "<html>";
    echo "<head>";
    echo "<title>Login sencillo con PHP</title>";
    echo "</head>";
    echo "<body>";
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    if (($usuario == "asd") && ($p == "asd")) {
      echo "Bienvenido a la web <h1> $usuario</h1><br>";
    } else {
      echo "Nombre de usuario o contraseña incorrecto<br/>";
      echo "<a href='http://localhost/PHP_Home/T2IntroPHP/T2Login/login2/index.php'>Volver</a>";
    }
    echo "</body>";
    echo "</html>";
  }

}
?>