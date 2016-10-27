<!--
    @Created on : 20-oct-2016, 23:45:49
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:

                  *Películas (cod_película, título, género, país, año)
                  *Personas (cod_persona, nombre, apellidos, país)
                  *Actúan (cod_película#, cod_persona#)
                  *Usuarios (id, user, pass)
 
                  También debe ser posible hacer un mantenimiento de la tabla Películas 
                  (Añadir, eliminar y modificar), pero ten cuidado, porque en este caso 
                  hay que enlazarla con la tabla Actúan para especificar los actores que trabajan en la película.

                  Escribe también el código PHP necesario para buscar una película 
                  cualquiera introduciendo su título, su género, el país o el nombre de cualquiera de sus actores.

                  El acceso a la aplicación tiene que estar controlado mediante 
                  una pantalla de login que solo permita acceder al programa a los usuarios registrados.
-->
<hr>
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
      echo '<em><strong>Total de Peliculas Encontradas </strong></em> = ' . $resultado->num_rows . '';
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
      
    } else {
      $pe->consulta_basica("cod_pelicula", $tmp);
      echo "<hr>";
    }

    if ($tmp1 == "") {
      
    } else {
      $pe->consulta_basica("titulo", $tmp1);
      echo "<hr>";
    }

    if ($tmp2 == "") {
      
    } else {
      $pe->consulta_basica("genero", $tmp2);
      echo "<hr>";
    }

    if ($tmp3 == "") {
      
    } else {
      $pe->consulta_basica("pais", $tmp3);
      echo "<hr>";
    }

    if ($tmp4 == "") {
      
    } else {
      $pe->consulta_basica("anio", $tmp4);
      echo "<hr>";
    }
    $mysqli->close();
  }

  /**
   * ♥ Parece que funciona bien 
   * Comprueba que no esta vacio el cod_pelicula
   * si lo estas no realiza inserccion
   */
  public function aniadir_pelicula() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    echo "Conexion establecida";
    $sql = "INSERT INTO peliculas (cod_pelicula,titulo,genero,pais,anio) VALUES ('" . $this->cod_pelicula . "','" . $this->titulo . "','" . $this->genero . "','" . $this->pais . "' , '" . $this->anio . "');";
    $inserccion = $mysqli->query($sql);
    echo "<br>";
    if ($inserccion === true) {
      echo ("<em> Nueva Inserccion del Registro </em><br>");
    } else {
      echo ("<b> No se Realizo Inserccion del Registro</b><br>");
    }
    $mysqli->close();
  }

  /**
   * ♥ Parte 1º
   * Recibe del metodo consultar_return_borrar el cod_pelicula 
   * que quiero borrar
   * Borra la pelicula por medio del cod_pelicula
   */
  public function borrar_pelicula() {
    $db = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($db->connect_errno) {
      die(" Error : No se establecio la conexion . " . $db->connect_error);
    }
    echo "Conexion Establecida";
    if (!empty($_REQUEST['cod_pelicula']) || isset($_REQUEST['cod_pelicula'])) {
      $resultado = $db->query("DELETE FROM peliculas WHERE cod_pelicula = '$this->cod_pelicula'");
      if ($resultado == true) {
        echo "<br> <b> Borrado CON EXISTO </b>";
        $db->close();
      } else {
        echo "<br> <b> Borrado SIN EXISTO </b><br>";
        echo "<br> <b> Comprueba cod_pelicula es correcto </b><br>";
        $db->close();
      }
    } else {
      echo " <br> Sin acceso <br> Introduce el <strong>cod_pelicula</strong> en el campo <b>cod_pelicula</b> ";
    }
  }

// forma de crear el formulario con lenguaje PHP 
  function crear_formulario() {
    echo "<form name='form_peliculas' method='post' action='index.php'>";
    echo " Cod Pelicula " . "<input type='text' name='cod_pelicula'><br>";
    echo " Titulo " . "<input type='text' name='titulo'><br>";
    echo " Genero " . "<input type='text' name='genero'><br>";
    echo " Pais " . "<input type='text' name='pais'><br>";
    echo " Anio " . "<input type='number' name='anio'><br>";
    echo "<input type='hidden' name='accion' value='inserta' />";
    echo "<input type='submit' name='formfunc' value='enviar'><br>";
    echo "</from>";
  }

}

$pe = new Peliculas();
if (isset($_POST['enviar'])) {
  $pe->cod_pelicula = $_POST['cod_pelicula'];
  $pe->titulo = $_POST['titulo'];
  $pe->genero = $_POST['genero'];
  $pe->pais = $_POST['pais'];
  $pe->anio = $_POST['anio'];
//  $pe->consulta_basica();
  $pe->consultar_pelicula();
//  $pe->aniadir_pelicula();
 $pe->insertar_pelicula();
//  $pe->borrar_pelicula();
}
?>
