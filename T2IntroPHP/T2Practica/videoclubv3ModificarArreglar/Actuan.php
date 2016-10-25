<!--
    @Created on : 19-oct-2016, 17:46:20
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:

                  *Películas (cod_película, título, género, país, año)
                  *Personas (cod_persona, nombre, apellidos, país)
                  *Actúan (cod_película#, cod_persona#)
                  *Usuarios (id, user, pass)

                  *En la tabla Actúan, las claves primarias son también claves ajenas.
                  
                  *Después escribe un programa en PHP para mantener la tabla Personas. 

                  El programa debe permitir:

                  *Añadir nuevos registros, introduciendo todos los campos de la tabla.

                  Eliminar registros existentes, introduciendo el código de la película.

                  Modificar los registros existentes, mostrando antes la información que haya en la BD.

                  También debe ser posible hacer un mantenimiento de la tabla Películas 
                  (Añadir, eliminar y modificar), pero ten cuidado, porque en este caso 
                  hay que enlazarla con la tabla Actúan para especificar los actores que trabajan en la película.

                  Escribe también el código PHP necesario para buscar una película 
                  cualquiera introduciendo su título, su género, el país o el nombre de cualquiera de sus actores.

                  El acceso a la aplicación tiene que estar controlado mediante 
                  una pantalla de login que solo permita acceder al programa a los usuarios registrados.
-->

<hr>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario basico</title>
  </head>
  <body>
    <p> Formulario Basico </p> 
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <br>
      Cod Pelicula <input type="text" name="cod_pelicula" value="">
      <br>
      Cod Persona <input type="text" name="cod_persona" value="">
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
<hr>
<br>
<?php

class Actuan {

  public $cod_pelicula;
  public $cod_persona;

  public function consultar_actuan() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      echo (" Error en la conexion " . $mysqli->connect_error);
    } else {
      $resultado = $mysqli->query("SELECT * FROM actuan WHERE cod_persona = '" . $this->cod_persona . "' or cod_pelicula = '" . $this->cod_pelicula . "';");
      $numeroRegistros = $resultado->num_rows;
      if ($resultado->num_rows > 0) {
        echo "<br><i> Total de numeros de Registro </i>" . $numeroRegistros;
        echo "<hr>";
        echo "<table border=2>"
        . "<tr>"
        . "<th> cod_pelicula </th>"
        . "<th> cod_persona </th>"
        . "</tr>";
      } else {
        echo "<b><br> No hay Registros </b><br>"
        . "<i> Comprueba los datos introducidos <br></i>";
      }
      while ($registro = $resultado->fetch_assoc()) {
        echo '<tr>';
        foreach ($registro as $campo) {
          echo '<td>', $campo, '</td>';
        }
        echo '</tr>';
      }
      echo '</table>';
      $mysqli->close();
    }
  }

}

$a = new Actuan();

if (isset($_POST['enviar'])) {
  echo "<br>";
  $a->cod_pelicula = $_POST['cod_pelicula'];
  $a->cod_persona = $_POST['cod_persona'];
  $a->consultar_actuan();
}
?>