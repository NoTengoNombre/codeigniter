<?php

class Login {

  /**
   * Mostrar formulario
   */
  public function showForm() {
    ?>
    <html>
      <head>
        <title>Login 3</title>
      </head>
      <body>
        <h3>Login sencillo con PHP</h3>
        <form action="index.php" method="get">
          Usuario:
          <input type="text" name="usuario" />
          <br/>
          Contraseña:
          <input type="password" name="passwd" />
          <br/>
          <!--Envia los datos del formulario por medio de un campo oculto-->
          <input type="hidden" name="do" value="checklogin"/>
          <input type="submit"/>
        </form>
      </body>
    </html>
    <?php
  }

  /**
   * Solo hace una consulta a la bd y si hay resultados mayores de 1 
   * accede a la parte del menu de seleccion de la aplicacion
   * 
   * Comprobar Login
   */
  public function checkLogin() {
    echo "<html>";
    echo "<head>";
    echo "<title>Login sencillo con PHP</title>";
    echo "</head>";
    echo "<body>";

    $usuario = $_REQUEST["usuario"];
    $password = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "videoclub");

    if ($conex->connect_errno) { // comprobar la conexion
      die("Error al conectar con la DB: " . $conex->connect_error . " 2º Error: " . $conex->connect_errno);
    }

//   objeto resultados : consulta : para comprobar si ese usuario existe.
    $result = $conex->query("SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$password';");

//    var_dump($result);
//    
//  Si hay más de 1 usuario - se muestra el menú de enlaces
    if ($result->num_rows > 0) {
      echo "Bienvenido a la web <h1> Usuario " . $usuario . "</h1> <br/>";
      echo "Menú<br/>";
      echo "<a href='index.php?do=anadirpelicula'> • Añadir película</a><br/>"; // Reenvia al index - 'do' para $_REQUEST - value = 'anadirpelicula' para el switch
      echo "<a href='index.php?do=buscarpelicula'> • Buscar película</a><br/>"; // Reenvia al index - 'do' para $_REQUEST - value = 'buscarpelicula' para el switch
      echo "<a href='index.php?do=updatepelicula'> • Modificar película</a><br/>";
      echo "<a href='index.php?do=borrarpelicula'> • Borrar pelicula</a><br/>";
      echo "<br>";
      echo "<a href='index.php'>Volver</a>";
    } else {
      echo "Nombre de usuario o contraseña incorrecto<br/>";
      echo "<a href='index.php'>Volver</a>";
    }
//    Como es un SELECT : tiene que liberar memoria
    $result->free();
    $conex->close();
    echo "</body></html>";
  }

}
?>