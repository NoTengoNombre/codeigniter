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
 public $cod_persona_nuevo;
 public $cod_persona_antiguo;
 public $nombre;
 public $apellidos;
 public $pais;

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

 /**
  * ♥ Funciona Modifica todas las personas 
  * this trae los valores almacenados en atributos
  */
 public function modificar_personas_COD() {
  $cod_antiguo = $this->cod_persona_antiguo;
  $cod_nuevo = $this->cod_persona_nuevo;
  echo "<br>";
  echo "<hr>";
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  echo "<br>";
  echo "<b><br> Mostrar valores </b><br> ";
  echo "<br> ";

  $resultado = $mysqli->query("SELECT cod_persona FROM personas");
  $numeroRegistros = $resultado->num_rows;
  if ($resultado->num_rows > 0) {
   echo '<br><i>Total de Numeros de Registros</i> = ' . $numeroRegistros . ' ';
   echo "<br>";
  } else {
   echo "<b>No hay registros creados <br> Introduce los cod_personas <br></b>";
  }
  while ($registro1 = $resultado->fetch_assoc()) {
   if (!empty($cod_antiguo) && !empty($cod_nuevo)) {
    if (($registro1['cod_persona'] == $cod_antiguo) && ($registro1['cod_persona'] !== $cod_nuevo || $cod_antiguo !== $cod_nuevo )) {
     echo "<br><b> No estan vacios </b> ";
     echo "<br><b> Cod_persona Encontrado =  " . $registro1['cod_persona'] . " <br> ";
     $registro1 = $mysqli->query("UPDATE personas SET cod_persona = '" . $cod_nuevo . "' WHERE cod_persona = '" . $cod_antiguo . "' ;");
     if ($registro1 == true) {
      echo "<b><br> Consulta realizada </b><br> ";
      echo "<b><br> Nuevo Valor Cod_persona : $this->cod_persona_nuevo </b><br> ";
     }
    }
   } else {
    echo "<br><b> Uno o varios campos estan vacios o <br> Ese Registro No existe en la BD </b><br> ";
    return;
   }
  }
  $mysqli->close();
 }

 public function modificar_personas_completo() {
  $p = new personas();
  $p->consultar_personas();
  echo "<br>";
  echo "<hr>";
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  $registro = $mysqli->query("UPDATE personas SET nombre = '" . $this->nombre . "' , apellidos = '" . $this->apellidos . "' , pais = '" . $this->pais . "' WHERE cod_persona = '" . $this->cod_persona . "' ;");
  if ($registro == true) {
   echo "<b> Consulta realizada </b><br> ";
   echo "<br> ";
  }
  $mysqli->close();
 }

}

$p = new personas();
if (isset($_POST['enviar1'])) {
 $p->consultar_personas();
 echo "Ver Valores de entrada formulario ";
 if (isset($_POST['enviar1'])) {
  $p->cod_persona_antiguo = $_POST['cod']; // String
  $p->cod_persona_nuevo = $_POST['cod1']; // string
  echo "<br>";
  $p->modificar_personas_COD();
 }
}


if (isset($_POST['enviar'])) {
// Datos se envian formulario se almacenan atributos clase
 $p->cod_persona = $_POST['cod_persona'];
 $p->nombre = $_POST['nombre'];
 $p->apellidos = $_POST['apellidos'];
 $p->pais = $_POST['pais'];
 $p->modificar_personas_completo();
}
//
//
?>
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
         <br>
         Cod_persona Antiguo : <input type="text" name="cod" value="">
         <br>
         Cod_personas Nuevo :  <input type="text" name="cod1" value="">
         <br>
         <input type="submit" name="enviar1" value="Enviar">
      </form> 
   </body>
</html>
<hr>
<br>

<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
         <br>
         Cod_persona : <input type="text" name="cod_persona" value="">
         <br>
         Nombre :  <input type="text" name="nombre" value="">
         <br>
         Apellidos :  <input type="text" name="apellidos" value="">
         <br>
         Pais :  <input type="text" name="pais" value="">
         <br>
         <input type="submit" name="enviar" value="Enviar">
      </form> 
   </body>
</html>
<br>
<br>
<hr>
<br>







<!--
/**
 * ♥ Funciona Modifica todas las personas 
 */
public function modificar_personas_completo_con_COD() {
 if (empty($_POST['cod']) && empty($_POST['cod1'])) {
  echo "<br><i> Estan vacios </i> ";
 } else {
  $p = new personas();
  $p->modificar_personas_COD();
  $p->consultar_personas();
 }
 echo "<br>";
 echo "<hr>";
 $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
 $registro = $mysqli->query("UPDATE personas SET nombre = '" . $this->nombre . "' , apellidos = '" . $this->apellidos . " , pais = '" . $this->pais . "' WHERE cod_personas = '" . $this->cod_persona . "' ; ");
 if ($registro == true) {
  echo "<b> Consulta realizada </b><br> ";
  echo "<br> ";
 }
 $mysqli->close();
}
-->