<!--
/**
 * @todo...:
 * @access.:
 * @author.: Radwulf Candle
 * @example:
 * @see....:
 * @since..:
 * @package:
 */
-->

<?php

class personas {

 public $cod_persona;
 public $nombre;
 public $apellidos;
 public $pais;
 public $cod_persona_nuevo;
 public $cod_persona_antiguo;

 /**
  * ♥ Funciona muestra todos los resultados automaticamente
  */
 public function consultar_personas() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   die("Error : No se establecido la conexion . " . $mysqli->connect_error);
  } else {
   $resultado = $mysqli->query("SELECT * FROM personas");
   $numeroRegistros = $resultado->num_rows;
   if ($resultado->num_rows > 0) {
    echo '<br><i>Total de Numeros de Registros</i> = ' . $numeroRegistros . ' ';
    echo '<hr>';
    echo "<table border=1>"
    . "<tr>"
    . "<th> cod_persona </th>"
    . "<th> nombre </th>"
    . "<th> apellidos </th>"
    . "<th> pais </th>"
    . "</tr>";
   } else {
    echo "<b>No hay registros <br> Comprueba los datos introducidos<br></b>";
   }
   while ($registro = $resultado->fetch_assoc()) {
    echo '<tr>'
    . '<td>' . $registro['cod_persona'] . '</td>'
    . '<td>' . $registro['nombre'] . '</td>'
    . '<td>' . $registro['apellidos'] . '</td>'
    . '<td>' . $registro['pais'] . '</td>'
    . '</tr>';
   }
   $mysqli->close();
  }
 }

 public function borrar_personas() {
  $db = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($db->connect_errno) {
   die(" Error : No se establecio la conexion . " . $db->connect_error);
  }
  echo $this->cod_persona;
  if (isset($_POST['enviar2']) && !empty($this->cod_persona)) {
   if ($this->consultar_return_borrar() == $_POST['codb']) {
    $ver = $resultado = $db->query("DELETE FROM personas WHERE cod_persona = '$this->cod_persona'");
    if ($ver == true) {
     echo "<br> <b> Borrado CON EXISTO </b>";
     $db->close();
    }
   } else {
    echo "<br> <b> Borrado SIN EXISTO </b><br>";
    echo "<br> <b> Comprueba cod_persona es correcto </b><br>";
    $db->close();
   }
  } else {
   echo " <br> Sin acceso <br> Introduce el <b>cod_persona</b> en el campo <b>Cod_Persona</b> ";
  }
 }

 public function consultar_return_borrar() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  echo "Codigo b : " . $this->cod_persona;
  $resultado = $mysqli->query("SELECT cod_persona FROM personas where cod_persona LIKE '" . $this->cod_persona . "' ; ")
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
    if ($this->cod_persona == $campo) {
     echo "Registro Encontrado :  " . $this->cod_persona;
     return $this->cod_persona;
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

}

$p = new personas();
$p->consultar_personas();
if (isset($_POST['enviar2'])) {
 $p->cod_persona = $_POST['codb'];
 $p->borrar_personas();
}
?>
<br>
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
         <br>
         Cod_persona para borrar : <input type="text" name="codb" value="">
         <br>
         <input type="submit" name="enviar2" value="Enviar">
         <br>
      </form> 
      <hr>
      <br>
   </body>
</html>

