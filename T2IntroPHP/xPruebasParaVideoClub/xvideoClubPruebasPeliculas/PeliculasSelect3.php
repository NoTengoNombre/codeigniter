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
      <!--Titulo : <input type="text" name="titulo" value="">-->
      <!--<br>-->
      <!--Genero : <input type="text" name="genero" value="">-->
      <!--<br>-->
      <!--Pais : <input type="text" name="pais" value="">-->
      <!--<br>-->
      <!--Anio : <input type="text" name="anio" value="">-->
      <!--<br>-->
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

    $var_cadena = isset($_REQUEST['cod_pelicula']);
    $sin_espacios = trim($var_cadena);
    if (isset($sin_espacios)) {
      echo "<br>♦ Sin espacios en blanco ";
    }

    if (empty($_REQUEST['cod_pelicula'])) {
      echo "<br>1-Valor : " . var_dump(isset($_REQUEST));
      echo "<br> - " . empty($_REQUEST['cod_pelicula']) . "<br>";
    } else {
      echo "<br>2-No Vacio : " . $_REQUEST['cod_pelicula'] . "<br>";
    }
  }

}

$pe = new Peliculas();
if (isset($_POST['enviar'])) {
  $pe->cod_pelicula = $_POST['cod_pelicula'];
//  $pe->titulo = $_POST['titulo'];
//  $pe->genero = $_POST['genero'];
//  $pe->pais = $_POST['pais'];
//  $pe->anio = $_POST['anio'];
  $pe->consultar_pelicula();
}
?>
