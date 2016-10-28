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
<?php

class Peliculas {

// Atributos
  public $cod_pelicula;
  public $titulo;
  public $genero;
  public $pais;
  public $anio;

  /**
   * ♥ Funciona.
   * ♦ Consultar_basica
   * Metodo de apoyo para consultar_pelicula
   * @param type $var0 parametro relacionado bd
   * @param type $var1 valor a consultar en la bd
   */
  public function consulta_basica($var0, $var1) {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error: No se establecido la conexion." . $mysqli->connect_error);
    }
// Todos los resultados
    $resultado = $mysqli->query("SELECT * FROM peliculas WHERE $var0 LIKE '$var1';");
    if ($resultado->num_rows > 0) {
      echo '<em><strong>Total de Peliculas Encontradas</strong></em> = ' . $resultado->num_rows;
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

  /**
   * ♥ Funciona !! 
   * ♦ Consultar_pelicula 
   * Utiliza Switch
   * Puede utilizar el metodo PeliculasSelect6CrearMetodoVersionGitana 
   * por medio de If else , muestra varios resultados
   */
  public function consultar_pelicula() {
    $pe = new Peliculas();
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("<br><strong>Error en la conexion : </strong>" . $mysqli->connect_error);
    }
    $tmp = (isset($_REQUEST["cod_pelicula"])) ? trim(htmlspecialchars($_REQUEST["cod_pelicula"], ENT_QUOTES, "UTF-8")) : "";
    $tmp1 = (isset($_REQUEST["titulo"])) ? trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8")) : "";
    $tmp2 = (isset($_REQUEST["genero"])) ? trim(htmlspecialchars($_REQUEST["genero"], ENT_QUOTES, "UTF-8")) : "";
    $tmp3 = (isset($_REQUEST["pais"])) ? trim(htmlspecialchars($_REQUEST["pais"], ENT_QUOTES, "UTF-8")) : "";
    $tmp4 = (isset($_REQUEST["anio"])) ? trim(htmlspecialchars($_REQUEST["anio"], ENT_QUOTES, "UTF-8")) : "";

    switch (isset($_REQUEST['enviar'])) {
      case $tmp : $pe->consulta_basica("cod_pelicula", $tmp);
        break;
      case $tmp1 : $pe->consulta_basica("titulo", $tmp1);
        break;
      case $tmp2 : $pe->consulta_basica("genero", $tmp2);
        break;
      case $tmp3 : $pe->consulta_basica("pais", $tmp3);
        break;
      case $tmp4 : $pe->consulta_basica("anio", $tmp4);
        break;
      default : "Opcion no permitida";
        break;
    }
    $mysqli->close();
    echo "<a href='index.php'>Volver al indice</a>";
  }

  /**
   * ♥ Funciona !!
   * ♦ Añadir Pelicula
   * Comprueba que no esta vacio el cod_pelicula
   * si lo estas no realiza inserccion
   */
  public function aniadir_pelicula() {
    $pe = new Peliculas();
    $pe->consulta_basica("cod_pelicula", "%");
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    echo "<em>Conexion establecida</em><br>";
    if ((isset($_REQUEST['cod_pelicula']) && isset($_REQUEST['titulo'])) && (isset($_REQUEST['genero']) && isset($_REQUEST['pais']) && isset($_REQUEST['anio']))) {
      $sql = "INSERT INTO peliculas(cod_pelicula,titulo,genero,pais,anio) VALUES ('" . $_REQUEST["cod_pelicula"] . "','" . $_REQUEST["titulo"] . "','" . $_REQUEST["genero"] . "','" . $_REQUEST["pais"] . "','" . $_REQUEST["anio"] . "');";
      echo "Comprobar consulta<br>" . $sql;  //  Consulta para depuracion.
      $inserccion = $mysqli->query($sql);
      if ($inserccion === true) {
        echo "<br><em>Nueva Inserccion del Registro</em><br>";
      } else {
        echo "<strong><br>No se Realizo Inserccion del Registro</strong><br>";
        echo "<em>Atencion : No se pueden añadir campos <strong>vacios o nulos</strong></em><br>";
      }
    }
    $mysqli->close();
    echo "<a href='index.php'>Volver al indice</a>";
  }

  /**
   * ♥ Funciona !!
   * ♦ Actualizar Pelicula
   * 
   */
  public function actualizar_pelicula() {
    $p = new Peliculas();
    $p->consulta_basica("cod_pelicula", "%");
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se ha establecido la conexion." . $mysqli->connect_error);
    }
    if ((isset($_REQUEST['cod_pelicula']) && isset($_REQUEST['titulo'])) && (isset($_REQUEST['genero']) && isset($_REQUEST['pais']) && isset($_REQUEST['anio']))) {
      echo "<em>Conexion establecida</em><br>";
      $sql = "UPDATE peliculas SET titulo='" . $_REQUEST['titulo'] . "' , genero='" . $_REQUEST['genero'] . "' , pais='" . $_REQUEST['pais'] . "' , anio='" . $_REQUEST['anio'] . "' WHERE cod_pelicula='" . $_REQUEST['cod_pelicula'] . "';";
      echo "<br>" . $sql;
      $inserccion = $mysqli->query($sql);
      if ($inserccion === true) {
        echo "<br><em>Actualizacion del Registro</em><br>";
      } else {
        echo "No se Realizo la <strong>Actualizacion</strong> del Registro<br>";
        echo "<em>Atencion : No se pueden <strong>actualizar</strong> campos vacios o nulos</em><br>";
      }
    }
    $mysqli->close();
    echo "<a href='index.php'>Volver al indice</a>";
  }

  /**
   * ♥ Funciona !!
   * ♦ Borrar Pelicula
   * Borra la pelicula por medio del cod_pelicula
   * No acepta valores que no esten en la bd
   */
  public function borrar_pelicula() {
    $pe = new Peliculas();
    $pe->consulta_basica("cod_pelicula", "%");
    $db = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($db->connect_errno) {
      die("Error: No se establecio la conexion." . $db->connect_error);
    }
    echo "Conexion Establecida";
    if (isset($_REQUEST['cod_pelicula']) && !empty($_REQUEST['cod_pelicula'])) {
      $sql = "DELETE FROM peliculas WHERE cod_pelicula='" . $_REQUEST['cod_pelicula'] . "';";
      echo "<br>" . $sql;
      echo "<br>";
      $resultado = $db->query($sql);
      if ($resultado == true && $db->affected_rows > 0) {
        echo "<br><strong>Borrado CON EXISTO</strong><br>";
      } else {
        echo "<br>Borrado <strong>SIN EXISTO</strong>";
        echo "<br>Comprueba<strong>cod_pelicula</strong> es correcto<br>";
      }
    } else {
      echo "<br><em>Sin acceso</em><br>Introduce el <strong>cod_pelicula</strong> en el campo <strong>cod_pelicula</strong>";
    }
    $db->close();
    echo "<br><a href='index.php'>Volver al indice</a><br>";
  }

  function crear_formulario_consultar() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Pelicula: " . "<input type='text' name='cod_pelicula'><br>";
    echo "Titulo: " . "<input type='text' name='titulo'><br>";
    echo "Genero: " . "<input type='text' name='genero'><br>";
    echo "Pais: " . "<input type='text' name='pais'><br>";
    echo "Anio: " . "<input type='number' name='anio'><br>";
    echo "<hr>";
    echo "<input type='hidden' name='do' value='consultar_pelicula'>";
    echo "<input type='submit' name='enviar' value='enviar'><br>";
    echo "</form>";
  }

  function crear_formulario_aniadir() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Pelicula: " . "<input type='text' name='cod_pelicula' required><br>";
    echo "Titulo: " . "<input type='text' name='titulo' required><br>";
    echo "Genero: " . "<input type='text' name='genero' required><br>";
    echo "Pais: " . "<input type='text' name='pais' required><br>";
    echo "Anio: " . "<input type='number' name='anio' required><br>";
    echo "<hr>";
    echo "<input type='hidden' name='do' value='aniadir_pelicula'>";
    echo "<input type='submit' name='enviar' value='enviar'><br>";
    echo "</form>";
  }

  function crear_formulario_actualizar() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Pelicula: " . "<input type='text' name='cod_pelicula'><br>";
    echo "Titulo: " . "<input type='text' name='titulo'><br>";
    echo "Genero: " . "<input type='text' name='genero'><br>";
    echo "Pais: " . "<input type='text' name='pais'><br>";
    echo "Anio: " . "<input type='number' name='anio'><br>";
    echo "<hr>";
    echo "<input type='hidden' name='do' value='actualizar_pelicula'>";
    echo "<input type='submit' name='enviar' value='enviar'><br>";
    echo "</form>";
  }

  function crear_formulario_borrar() {
    echo "<form method='get' action='index.php'>";
    echo "Cod Pelicula: " . "<input type='text' name='cod_pelicula'><br>";
    echo "<hr>";
    echo "<input type='hidden' name='do' value='borrar_pelicula'>";
    echo "<input type='submit' name='enviar' value='enviar'><br>";
    echo "</form>";
  }

}
