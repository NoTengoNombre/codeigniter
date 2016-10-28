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

<?php

class Login {

  /**
   * Formulario entrada a la aplicacion
   */
  public function showForm() {
    ?>
    <html>
      <head><title>Login</title></head>
      <body>
        <h3>Login sencillo con PHP</h3>
        <form action="index.php" method="get">
          Usuario:
          <input type="text" name="usuario" />
          <br/>
          Contraseña:
          <input type="password" name="passwd" />
          <br/>
          <input type="hidden" name="do" value="checklogin"/>
          <input type="submit"/>
        </form>
      </body>
    </html>
    <?php
  }

  /**
   * Comprueba Login
   */
  public function checkLogin() {
    echo "<html>";
    echo "<head>";
    echo "<title>Login sencillo con PHP</title>";
    echo "</head>";
    echo "<body>";

    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "videoclubprueba");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $result = $conex->query("SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$p'");

//    Enlace donde se realizan las operaciones en el index y llama a los metodos de las clases
    if ($result->num_rows > 0) {
      echo "Bienvenido a la web : <strong> " . $usuario . "</strong><br/>";
      echo "<strong>Menu</strong><br/>";
//      Peliculas
      echo "<hr>";
      echo "<p>Peliculas</p>";
      echo "<a href='index.php?do=consultar_pelicula'>Buscar Pelicula</a><br>";
      echo "<a href='index.php?do=aniadir_pelicula'>Añadir Pelicula</a><br>";
      echo "<a href='index.php?do=actualizar_pelicula'>Actualizar Pelicula</a><br>";
      echo "<a href='index.php?do=borrar_pelicula'>Borrar Pelicula</a><br>";
      echo "<hr>";
//      Personas
      echo "<p>Personas</p>";
      echo "<a href='index.php?do=consultar_personas'>Consultar Personas</a><br>";
      echo "<a href='index.php?do=aniadir_personas'>Aniadir Personas</a><br>";
      echo "<a href='index.php?do=actualizar_personas'>Actualizar Personas</a><br>";
      echo "<a href='index.php?do=borrar_personas'>Borrar Personas</a><br>";
      echo "<hr>";
//      Usuarios
      echo "<p>Usuarios</p>";
      echo "<a href='index.php?do=consultar_usuarios'>Consultar Usuarios</a><br>";
      echo "<a href='index.php?do=anadir_usuarios'>Aniadir Usuarios</a><br>";
      echo "<a href='index.php?do=actualizar_usuarios'>Actualizar Personas</a><br>";
      echo "<a href='index.php?do=borrar_usuarios'>Borrar Usuarios</a><br>";
      echo "<hr>";
//      Actuan
      echo "<p>Actuan</p>";
      echo "<a href='index.php?do=consultar_actuan'>Consultar Actuan</a><br>";
      echo "<hr>";
    } else {
      echo "<strong>Nombre de Usuario o Contraseña Incorrecto</strong><br>";
      echo "<a href='index.php'>Volver</a>";
    }
    $conex->close();
    echo "</body>";
    echo "</html>";
  }

}
