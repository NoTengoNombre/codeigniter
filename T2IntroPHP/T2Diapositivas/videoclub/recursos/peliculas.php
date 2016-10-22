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
<br>
<html>
   <head>
      <meta charset="UTF-8">
   </head>
   <body>
      <p><b>Formulario para cambiar Cod Pelicula</b></p>
      <hr> 
      <form method="post" name="form" action="<?php echo $_SERVER["PHP_SELF"] ?>">
         Cod_pelicula Antiguo : <input type="text" name="cod" value="">
         <br>
         Cod_pelicula Nuevo : <input type="text" name="cod1" value="">
         <br>
         <input type="submit" name="enviar1" value="Enviar">
      </form>
   </body>
   <hr>
</html>

<?php

/**
 * @access.:
 * @author.: Radwulf Candle
 */
class peliculas {

// Atributos
 public $cod_pelicula;
 public $cod_pelicula_viejo;
 public $cod_pelicula_nuevo;
 public $titulo;
 public $genero;
 public $pais;
 public $anio;

 /**
  * ♥ El constructor crea la conexion a la base de datos
  * cada objeto que se cree tendra una conexion
  */
 public function __construct() {
  if (isset($_POST['enviar'])) {
   $db = new mysqli("localhost", "root", "", "videoclubprueba");
   if ($db->connect_error) {
    die("Error en la conexion: " . $db->connect_error);
    exit();
   }
  } else {
   print "Conexion establecida a la BD <br>";
   echo "<hr>";
  }
 }

 /**
  * ♥ Parece que funciona bien 
  * Comprueba que no esta vacio el cod_pelicula
  * si lo estas no realiza inserccion
  */
 public function aniade_pelicula() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli === false) {
   die("Error : No se establecido la conexion . " . $mysqli->connect_error);
  }
  $sql = "INSERT INTO peliculas (cod_pelicula,titulo,genero,pais,anio) VALUES ('" . $this->cod_pelicula . "','" . $this->titulo . "','" . $this->genero . "','" . $this->pais . "' , '" . $this->anio . "') ; ";
  if (empty($_POST['cod_pelicula']) || !isset($_POST['cod_pelicula'])) {
   echo "<br> No se puede hacer ingresos en campos vacios  ";
  }
  $inserccion = $mysqli->query($sql);
  echo "<br>";
  if ($inserccion === true) {
   echo ("<i> Nueva Inserccion del Registro </i><br>");
  } else {
   echo ("<b> No se Realizo Inserccion del Registro</b><br>");
  }
  $mysqli->close();
 }

 /**
  * ♥ Actualizar cod 
  * $registro['cod_pelicula'] -> convierte en un array con los valores de la bd
  */
 public function actualizar_cod_pelicula() {
  $db = new mysqli("localhost", "root", "", "videoclubprueba");
  $registro = $db->query("UPDATE peliculas SET cod_pelicula = '" . $_POST['id1'] . "' WHERE cod_pelicula = '" . $_POST['id'] . "' ;");
//  $registro['cod_pelicula'] -> convierte en un array con los valores de la bd
  if ($registro['cod_pelicula'] != $_POST['id1']) {
   echo "<br><b> cod_pelicula modificado por : </b>" . $_POST['id1'] . " ";
  } else {
   echo "<br><b> Error en la Actualizacion <br> Comprueba que esta bien introducido ambos IDs </b><br>";
  }
  $db->close();
 }

 /**
  * ♥ Parte 1º
  * Recibe del metodo consultar_return_borrar el cod_pelicula 
  * que quiero borrar
  * Borra la pelicula por medio del cod_pelicula
  */
 public function borra_pelicula() {
  $db = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($db->connect_errno) {
   die(" Error : No se establecio la conexion . " . $db->connect_error);
  }
  if (isset($_POST['enviar']) && !empty($_POST['cod_pelicula'])) {
   # Es correcto este bucle condicional ? 
   if ($this->consultar_borrar_return() == $_POST['cod_pelicula']) {
    $ver = $resultado = $db->query("DELETE FROM peliculas WHERE cod_pelicula = '$this->cod_pelicula'");
    if ($ver == true) {
     echo "<br> <b> Borrado CON EXISTO </b>";
     $db->close();
    }
   } else {
    echo "<br> <b> Borrado SIN EXISTO </b><br>";
    echo "<br> <b> Comprueba cod_pelicula es correcto </b><br>";
    $db->close();
   }
  } else {
   echo " <br> Sin acceso <br> Introduce el <b>cod_pelicula</b> en el campo <b>cod_pelicula</b> ";
  }
 }

 /**
  * ♥ Parte 2º
  * Busca bd
  * Muestra nº Filas afectadas
  * Devuelve atributo String id_usuario
  */
 public function consultar_borrar_return() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  $resultado = $mysqli->query("SELECT cod_pelicula FROM peliculas where cod_pelicula LIKE '" . $this->cod_pelicula . "' ; ")
          or die($mysqli->error . " en la linea " . (__LINE__ - 1));
  $numRegistros = $resultado->num_rows;
  if ($numRegistros == 0) {
   echo "<p><b> El registro no existe </b></p>";
  }
  echo "<p> El num de registros son : ", $numRegistros, "</p>";
  echo "<table border=2>" .
  "<tr>"
  . "<th> Id_usuario </th>"
  . "</tr>";
  while ($registro = $resultado->fetch_assoc()) {
   echo "<tr>";
   foreach ($registro as $campo) {
    echo "<td>", $campo, "</td>";
    if ($this->cod_pelicula == $campo) {
     echo "Registro Encontrado :  " . $this->cod_pelicula;
     return $this->cod_pelicula;
    } else {
     echo "Registro NO Encontrado ";
     $mysqli->close();
     return;
    }
   }
   echo "</tr>";
  }
  echo "</table>";
 }

 /**
  * ♥ Funciona con objetos y arrays asociativo
  * Metodo ejecuta la consulta para 
  * ello necesita el objeto
  *  para realizar la conexion
  */
 public function consultar_pelicula() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   die("<b><br>Error en la conexion : </b>" . $mysqli->connect_error);
  } else {
   $resultado = $mysqli->query("SELECT * FROM peliculas where cod_pelicula LIKE '" . $this->cod_pelicula . "' or titulo = '" . $this->titulo . "'  or genero = '" . $this->genero . "' or pais = '" . $this->pais . "'  or anio = '" . $this->anio . "' ; ");
   $numeroRegistros = $resultado->num_rows;
   if ($resultado->num_rows > 0) {
    echo "<br><i> El Numero de Registros Encontrados  </i>: ", $numeroRegistros, " ";
    echo "<hr>";
    echo "<table border=1>"
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

// forma de crear el formulario con lenguaje PHP 
 function crear_formulario() {
  echo "<form name='form_peliculas' method='post' action='index_1.php'>";
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

$pe = new peliculas();
if (isset($_POST['enviar'])) {
 $pe->cod_pelicula = $_POST['cod_pelicula'];
 $pe->titulo = $_POST['titulo'];
 $pe->genero = $_POST['genero'];
 $pe->pais = $_POST['pais'];
 $pe->anio = $_POST['anio'];
 $pe->aniade_pelicula();
 $pe->consultar_pelicula();
// $pe->insertar_pelicula();
// $pe->borra_pelicula();
}

// Formulario basico
if (isset($_POST['enviar1'])) {
 $pe = new peliculas();
// $pe->cod_pelicula_viejo = $_POST['cod'];
//// $pe->cod_pelicula_nuevo = $_POST['cod1'];
// $pe->actualizar_cod_pelicula();
}
?>
