<!DOCTYPE html>
<!--
    @Created on : 20-oct-2016, 23:07:10
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
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Login {

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
            <input type="text" name="passw" />
            <br>
            <!-- Lanza el checkLogin-->
            <input type="hidden" name="do" value="checkLogin" />
            <input type="submit" />
          </form>
        </body>
      </html>
      <?php
    }

    public function checkLogin() {
      echo "<html>";
      echo "<head>";
      echo "<title>Login sencillo con PHP</title>";
      echo "</head>";
      echo "<body>";
      $usuario = $_REQUEST["usuario"];
      $p = $_REQUEST["passw"];

      $conex = new mysqli("localhost", "root", "", "videoclubprueba");

      if ($conex->connect_error) {
        die("♦ Error al conectar con la BD : " . $conex->connect_errno);
        $result = $conex->query("SELECT user FROM usuarios WHERE user='$usuario' AND pass='$p'");
        if ($result->num_rows > 0) {
          echo "Bienvenido a la web , $usuario<br>";
          echo "Menu<br><hr>";
          echo "<a href='index.php?do=aniadir_pelicula'>Añadir Pelicula</a><br>";
          echo "<a href='index.php?do=consultar_pelicula'>Buscar Pelicula</a><br>";
          echo "<a href='index.php?do=actualizar_peliculas'>Modificar pelicula</a><br>";
          echo "<a href='index.php?do=borrar_pelicula'>Borrar pelicula</a><br>";
        } else {
          echo "Nombre de usuario o contraseña incorrecta<br>";
          echo "<a href='index.php?do=checkLogin'>Volver</a>";
        }
        $result->free();
        $conex->close();
        echo "</body>";
        echo "</html>";
      } else {
        echo "Error en la conexion";
      }
    }

  }
  