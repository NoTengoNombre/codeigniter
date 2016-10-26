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

  public function consulta_basica() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    $resultado = $mysqli->query("SELECT * FROM peliculas WHERE cod_pelicula LIKE '%';"); // Todos los resultados
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
      print "<p>No ha escrito ningun nombre $tmp </p>";
    } else {
      print "<p> Su nombre es " . $tmp . "</p>";
      $resultado = $mysqli->query("SELECT * FROM peliculas WHERE cod_pelicula LIKE '" . $this->cod_pelicula . "';");
    }

    if ($tmp1 == "") {
      print "<p>No ha escrito ningun nombre $tmp1</p>";
    } else {
      print "<p> Su nombre es " . $tmp1 . "</p>";
      $resultado = $mysqli->query("SELECT * FROM peliculas WHERE titulo LIKE '" . $this->titulo . "';");
    }

    if ($tmp2 == "") {
      print "<p>No ha escrito ningun nombre $tmp2</p>";
    } else {
      print "<p> Su nombre es " . $tmp2 . "</p>";
      $resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '" . $this->genero . "';");
    }

    if ($tmp3 == "") {
      print "<p>No ha escrito ningun nombre $tmp3</p>";
    } else {
      print "<p> Su nombre es " . $tmp3 . "</p>";
      $resultado = $mysqli->query("SELECT * FROM peliculas WHERE pais LIKE '" . $this->genero . "';");
    }

    if ($tmp4 == "") {
      print "<p>No ha escrito ningun nombre $tmp4</p>";
    } else {
      print "<p> Su nombre es " . $tmp4 . "</p>";
      $resultado = $mysqli->query("SELECT * FROM peliculas WHERE anio LIKE '" . $this->anio . "';");
    }

    echo "Numero de filas : " . $numeroRegistros = $resultado->num_rows;
    if ($resultado->num_rows > 0) {
      echo "<br><em> El Numero de Registros Encontrados  </em>: ", $numeroRegistros, " ";
      echo "<hr>";
      echo "<table border='1'>"
      . "<tr>"
      . "<th> Cod_pelicula </th>"
      . "<th> Titulo </th>"
      . "<th> Genero </th>"
      . "<th> Pais </th>"
      . "<th> Anio </th>"
      . "</tr>";
    }
    while ($registro = $resultado->fetch_assoc()) {
      echo'<tr>'
      . '<td>' . $registro["cod_pelicula"] . '</td>';
      echo'<td><br>' . $registro["titulo"] . '</td>';
      echo'<td><br>' . $registro["genero"] . '</td>';
      echo'<td><br>' . $registro["pais"] . '</td>';
      echo'<td><br>' . $registro["anio"] . '</td>'
      . '</tr>';
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
