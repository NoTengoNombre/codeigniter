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
  * ♥ Añadir peliculas
  */
 public function aniadir_personas() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   die("Error : No se establecido la conexion . " . $mysqli->connect_error);
  }
  $sql = "INSERT INTO personas (cod_persona,nombre,apellidos,pais) VALUES ('" . $this->cod_persona . "','" . $this->nombre . "','" . $this->apellidos . "','" . $this->pais . "' ) ; ";
  if (empty($_POST['cod_persona']) || !isset($_POST['cod_persona'])) {
   echo "<br> No se puede hacer en campos vacios  ";
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
  */
 public function modificar_personas_COD() {
  $cod_antiguo = $this->cod_persona_antiguo;
  $cod_nuevo = $this->cod_persona_nuevo;
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  echo "<b> Mostrar valores </b> ";
  $resultado = $mysqli->query("SELECT cod_persona FROM personas");
  $numeroRegistros = $resultado->num_rows;
  if ($resultado->num_rows > 0) {
   echo '<i>Total de Numeros de Registros</i> = ' . $numeroRegistros . ' ';
   echo "<br>";
  } else {
   echo "<b>No hay registros creados <br> Introduce los cod_personas <br></b>";
  }
  while ($registro1 = $resultado->fetch_assoc()) {
   if (!empty($cod_antiguo) && !empty($cod_nuevo)) {
    if (($registro1['cod_persona'] === $cod_antiguo) && ($registro1['cod_persona'] !== $cod_nuevo || $cod_antiguo !== $cod_nuevo )) {
     echo "<br><b> Anterior cod_persona   =  " . $registro1['cod_persona'] . "</b><br> ";
     $registro = $mysqli->query("UPDATE personas SET cod_persona = '" . $cod_nuevo . "' WHERE cod_persona = '" . $cod_antiguo . "' ;");
     if ($registro == true) {
      echo "<br><i> Consulta realizada </i><br><br>";
      echo "<b> Nuevo Valor Cod_persona : $this->cod_persona_nuevo </b><br> ";
     } else {
      echo "<b> Consulta Fallada </b><br>";
     }
    } else {
     for ($i = 0; $i < count($registro1); $i++) {
      echo "<br><i> Los registros disponibles son : </i> " . $registro1['cod_persona'];
     }
//     return;
    }
   } else {
    echo "<br><b> Uno o varios campos estan vacios </b>";
    return;
   }
  }
  $mysqli->close();
 }

 /**
  * ♥ Funciona
  */
 public function modificar_personas_completo() {
  $p = new personas();
  $p->consultar_personas();
  echo "<br>";
  echo "<hr>";
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  $registro = $mysqli->query("UPDATE personas SET nombre = '" . $this->nombre . "' , apellidos = '" . $this->apellidos . "' , pais = '" . $this->pais . "' WHERE cod_persona = '" . $this->cod_persona . "' ;");
  if ($registro == true) {
   echo "<b><br> Consulta realizada </b>";
   echo "<br> ";
  }
  $mysqli->close();
 }

 /**
  *  Funciona ♥
  */
 public function borrar_personas() {
  $db = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($db->connect_errno) {
   die(" <br> Error : No se establecio la conexion . " . $db->connect_error);
  }
  echo $this->cod_persona;
  if (isset($_POST['enviar2']) && !empty($this->cod_persona)) {
   if ($this->consultar_return_borrar() == $_POST['codb']) {
    $ver = $resultado = $db->query("DELETE FROM personas WHERE cod_persona = '$this->cod_persona'");
    if ($ver == true) {
     echo "<br> <b> Registro Borrado CON EXISTO </b>";
     $db->close();
    }
   } else {
    echo "<br> <b> Registro NO Borrado </b><br>";
    echo "<br> <b> Comprueba cod_persona es correcto </b><br>";
    $db->close();
   }
  } else {
   echo " <br> Sin Accceso al Registro <br> Introduce el <b>cod_persona</b> en el campo <b>Cod_Persona</b> ";
  }
 }

 /**
  * 
  * @return type
  */
 public function consultar_return_borrar() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  $resultado = $mysqli->query("SELECT cod_persona FROM personas where cod_persona LIKE '" . $this->cod_persona . "' ; ")
          or die($mysqli->error . " en la linea " . (__LINE__ - 1));
  $numRegistros = $resultado->num_rows;
  if ($numRegistros == 0) {
   echo "<p><b> El registro no existe </b></p>";
  }
  echo "<p> El num de registros son : ", $numRegistros, "</p>";
  echo "<table border=2>" .
  "<tr>"
  . "<th> cod_usuario </th>"
  . "</tr>";
  while ($registro = $resultado->fetch_assoc()) {
   echo "<tr>";
   foreach ($registro as $campo) {
    echo "<td>", $campo, "</td>";
    if ($this->cod_persona == $campo) {
     echo "<br>Registro Encontrado :  <br>" . $this->cod_persona;
     return $this->cod_persona;
    } else {
     echo "<br>Registro NO Encontrado <br>";
     $mysqli->close();
     return;
    }
   }
   echo "</tr>";
  }
  echo "</table>";
 }

}

$per = new personas();

if (isset($_POST['enviar'])) {
// Datos se envian formulario se almacenan atributos clase
 $per->cod_persona = $_POST['cod_persona'];
 $per->nombre = $_POST['nombre'];
 $per->apellidos = $_POST['apellidos'];
 $per->pais = $_POST['pais'];
 $per->modificar_personas_completo();
}

if (isset($_POST['enviar1'])) {
 $per->cod_persona_antiguo = $_POST['cod'];
 $per->cod_persona_nuevo = $_POST['cod1'];
 $per->modificar_personas_COD();
}

if (isset($_POST['enviar2'])) {
 $per->cod_persona = $_POST['codb'];
 $per->borrar_personas();
}
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
         Cod_persona para borrar : <input type="text" name="codb" value="">
         <br>
         <input type="submit" name="enviar2" value="Enviar">
         <br>
      </form> 
      <hr>
      <br>
   </body>
</html>

