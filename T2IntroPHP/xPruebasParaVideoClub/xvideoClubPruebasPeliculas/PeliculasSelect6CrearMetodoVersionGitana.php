<!--
    @Created on : 20-oct-2016, 23:45:49
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
    <title>Prueba para fijar datos por medio de formularios</title>
  </head>
  <body>
    <p align="center"> Formulario </p>
    <h4>Formulario para consultar datos </h4>
    <hr> 
    <form method="post" name="formGeneral" action=" <?php echo $_SERVER["PHP_SELF"] ?>">
      Cod Pelicula  : <input type="text" name="cod_pelicula" value="">
      <br>
      Titulo : <input type="text" name="titulo" value="">
      <br>
      Genero : <input type="text" name="genero" value="">
      <br>
      Pais : <input type="text" name="pais" value="">
      <br>
      Anio : <input type="text" name="anio" value="">
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
<hr>
<?php

class Peliculas {

// Atributos
  public $cod_pelicula;
  public $titulo;
  public $genero;
  public $pais;
  public $anio;

  public function consulta_basica($var0, $var1) {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    $resultado = $mysqli->query("SELECT * FROM peliculas WHERE $var0 LIKE '$var1';"); // Todos los resultados
    if ($resultado->num_rows > 0) {
      echo '<em><strong>Total de Numeros de Registros</strong></em> = ' . $resultado->num_rows . '';
      echo "<br><table border='1'>"
      . "<tr>"
      . "<th> Cod_pelicula </th>"
      . "<th> Titulo </th>"
      . "<th> Genero </th>"
      . "<th> Pais </th>"
      . "<th> Anio </th>"
      . "</tr>";
    }
    while ($registro = $resultado->fetch_assoc()) {
      echo '<tr>'
      . '<td>' . $registro['cod_pelicula'] . '</td>'
      . '<td>' . $registro['titulo'] . '</td>'
      . '<td>' . $registro['genero'] . '</td>'
      . '<td>' . $registro['pais'] . '</td>'
      . '<td>' . $registro['anio'] . '</td>'
      . '</tr>';
    }
    $mysqli->close();
  }

  public function consultar_pelicula() {
    $pe = new Peliculas();
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("<b><br>Error en la conexion : </b>" . $mysqli->connect_error);
    }
    $tmp = (isset($_REQUEST["cod_pelicula"])) ? trim(htmlspecialchars($_REQUEST["cod_pelicula"], ENT_QUOTES, "UTF-8")) : "";
    $tmp1 = (isset($_REQUEST["titulo"])) ? trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8")) : "";
    $tmp2 = (isset($_REQUEST["genero"])) ? trim(htmlspecialchars($_REQUEST["genero"], ENT_QUOTES, "UTF-8")) : "";
    $tmp3 = (isset($_REQUEST["pais"])) ? trim(htmlspecialchars($_REQUEST["pais"], ENT_QUOTES, "UTF-8")) : "";
    $tmp4 = (isset($_REQUEST["anio"])) ? trim(htmlspecialchars($_REQUEST["anio"], ENT_QUOTES, "UTF-8")) : "";

    if ($tmp == "") {
//      print "<p>No ha escrito ningun nombre $tmp </p>";
    } else {
//      print "<p> Su nombre es " . $tmp . "</p>";
      $pe->consulta_basica("cod_pelicula", $tmp);
    }

    if ($tmp1 == "") {
//      print "<p>No ha escrito ningun nombre $tmp1</p>";
    } else {
//      print "<p> Su nombre es " . $tmp1 . "</p>";
      $pe->consulta_basica("titulo", $tmp1);
    }

    if ($tmp2 == "") {
//      print "<p>No ha escrito ningun nombre $tmp2</p>";
    } else {
//      print "<p> Su nombre es " . $tmp2 . "</p>";
      $pe->consulta_basica("genero", $tmp2);
    }

    if ($tmp3 == "") {
//      print "<p>No ha escrito ningun nombre $tmp3</p>";
    } else {
//      print "<p> Su nombre es " . $tmp3 . "</p>";
      $pe->consulta_basica("pais", $tmp3);
    }

    if ($tmp4 == "") {
//      print "<p>No ha escrito ningun nombre $tmp4</p>";
    } else {
//      print "<p> Su nombre es " . $tmp4 . "</p>";
      $pe->consulta_basica("anio", $tmp4);
    }
    $mysqli->close();
  }

}

$pe = new Peliculas();
if (isset($_POST['enviar'])) {
  $pe->cod_pelicula = $_POST['cod_pelicula'];
  $pe->titulo = $_POST['titulo'];
  $pe->genero = $_POST['genero'];
  $pe->pais = $_POST['pais'];
  $pe->anio = $_POST['anio'];
  $pe->consultar_pelicula();
}
?>
