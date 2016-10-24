<?php

/**
 * @todo...:
 * @title..:
 * @author.: R.V.S
 * @example:
 * @since..:
 * @test
 */
// echo "<br>";
// echo "<hr>";
// echo "<b>    </b>";
// echo "<pre>    </pre>";
// echo "<tt>    </tt>";
//echo gettype();



class Actuan {

 public $cod_pelicula;
 public $cod_persona;

 public function __construct() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   die(" Error en la conexion " . $mysqli->connect_error);
  } else {
   echo "Conexion establecida ";
  }
 }

 public function consultar_actuan() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   echo (" Error en la conexion " . $mysqli->connect_error);
  } else {
//   $resultado = $mysqli->query("SELECT * FROM actuan ;");
//   $resultado = $mysqli->query("SELECT * FROM actuan WHERE cod_persona = '" . $_POST['cod_persona'] . "' or cod_pelicula = '" . $_POST['cod_pelicula'] . "';");
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
<hr><br>
