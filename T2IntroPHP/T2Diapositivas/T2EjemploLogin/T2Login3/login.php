<!DOCTYPE html>
<!--
    @Created on : 20-oct-2016, 23:07:10
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Login {

      /**
       * Metodo que muestra un formulario 
       */
      public function showForm() {
        ?>
      <html>
        <head>
          <title></title>
        <body>
          <h3>Login sencillo con PHP</h3>
          <form action="index.php" method="get">
            Usuario :
            <input type="text" name="usuario" />
            <br>
            Contraseña:
            <input type="text" name="passwd" />
            <br>
            <input type="hidden" name="do" value="checklogin" />
            <input type="submit" />
          </form>
        </body>
      </html>
      <?php
    }

    /**
     * ♦ Metodo que crea un formulario 
     * • Comprueba el usuario y el pass 
     *   Crea una conexion 
     * ♠ Si la conexion es correcta entra y 
     * muestra todos los enlaces con los distintos
     * metodos 
     * ♣ Si no es correcta : error
     */
    public function checkLogin() {
      echo "<html>";
      echo "<head>";
      echo "<title>Login sencillo con PHP </title>";
      echo "</head>";
      echo "<body>";
      $usuario = $_REQUEST["usuario"];
      $p = $_REQUEST["passwd"];

      $conex = new mysqli("localhost", "root", "", "videoclubprueba");

      if ($conex->connect_error) {
        die("♦ Error al conectar con la BD: " . $conex->connect_error);
        echo $conex->connect_errno;
        $result = $conex->query("SELECT user FROM usuarios WHERE user ='$usuario' AND pass='$p'");
        if ($result->num_rows > 0) {
          echo "Bienvenido a la web : " . $usuario . " <br>";
          echo "Menu<br>";
          echo "<a href='index.php?do=anadirpelicula'>Añadir Pelicula</a><br>";
          echo "<a href='index.php?do=buscarpelicula'>Buscar Pelicula</a><br>";
          echo "<a href='index.php?do='>Actualizar pelicula</a><br>";
          echo "<a href='index.php?do='>Borrar pelicula</a><br>";
        } else {
          echo "Nombre de usuario o contraseña incorrecta<br>";
          echo "<a href='..'>Volver</a>";
        }
        $result->free();
        $conex->close();
        echo "</body>";
        echo "</html>";
      }
    }

  }
  