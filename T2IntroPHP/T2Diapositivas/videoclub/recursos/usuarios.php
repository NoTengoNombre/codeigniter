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

class usuarios {

 public $id;
 public $id_nuevo;
 public $user;
 public $pass;

 /**
  * ♥ Funciona muestra todos los resultados automaticamente
  */
 public function consultar_usuarios() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   die("Error : No se establecido la conexion . " . $mysqli->connect_error);
  } else {
   $resultado = $mysqli->query("SELECT * FROM usuarios ");
   $numeroRegistros = $resultado->num_rows;
   echo "<b><br> Registros de la BD Usuarios </b>";
   if ($resultado->num_rows > 0) {
    echo '<br><i>Total de Registros</i> = ' . $numeroRegistros . ' ';
    echo '<hr>';
    echo "<table border=1>"
    . "<tr>"
    . "<th> id </th>"
    . "<th> user </th>"
    . "<th> pass </th>"
    . "</tr>";
   } else {
    echo "<b>No hay registros <br> Comprueba los datos introducidos<br></b>";
   }
   while ($registro = $resultado->fetch_assoc()) {
    echo '<tr>'
    . '<td>' . $registro['id'] . '</td>'
    . '<td>' . $registro['user'] . '</td>'
    . '<td>' . $registro['pass'] . '</td>'
    . '</tr>';
   }
   $mysqli->close();
  }
 }

 /**
  * ♥ Funciona inserta usuarios
  */
 public function anadir_usuarios() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($mysqli->connect_errno) {
   die("Error : No se establecido la conexion . " . $mysqli->connect_error);
  }
  $sql = "INSERT INTO usuarios (id,user,pass) VALUES ('" . $this->id . "','" . $this->user . "','" . $this->pass . "' ) ; ";
  if (empty($_POST['id']) || !isset($_POST['id'])) {
   echo "<br> No se puede hacer insercciones en campos vacios  ";
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
  * 
  */
 public function actualizar_usuarios_completo() {
  $p = new usuarios();
  $p->consultar_usuarios();
  echo "<br>";
  echo "<hr>";
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  $registro = $mysqli->query("UPDATE usuarios SET id = '" . $this->id . "' , user = '" . $this->user . "' , pass = '" . $this->pass . "' WHERE id = '" . $this->id . "' ;");
  if ($registro == true) {
   echo "<b><br> Consulta realizada </b>";
   echo "<br> ";
  } else {
   echo "<b><br> Consulta NO Realizada </b>";
   echo "<br> ";
  }
  $mysqli->close();
 }

 /**
  * ♥ Actualizar cod 
  * $registro['cod_pelicula'] -> convierte en un array con los valores de la bd
  */
 public function actualizar_usuarios_por_cod() {
  $id_antiguo = $this->id;
  $id_nuevo = $this->id_nuevo;
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  echo "<b> Mostrar valores </b> ";
  $resultado = $mysqli->query("SELECT id FROM usuarios");
  $numeroRegistros = $resultado->num_rows;
  if ($resultado->num_rows > 0) {
   echo '<i>Total de Numeros de Registros</i> = ' . $numeroRegistros . ' ';
   echo "<br>";
  } else {
   echo "<b>No hay registros creados <br> Introduce los id correctos <br></b>";
  }
  while ($registro1 = $resultado->fetch_assoc()) {
   if (!empty($id_antiguo) && !empty($id_nuevo)) {
    if (($registro1['id'] === $id_antiguo) && ($registro1['id'] !== $id_nuevo || $id_antiguo !== $id_nuevo)) {
     echo "<br><b> Anterior id =  " . $registro1['id'] . "</b><br> ";
     $registro = $mysqli->query("UPDATE usuarios SET id = '" . $id_nuevo . "' WHERE id = '" . $id_antiguo . "' ;");
     if ($registro == true) {
      echo "<br><i> Consulta realizada </i><br><br>";
      echo "<b> Nuevo Valor Id  : $this->id_nuevo </b><br> ";
     } else {
      echo "<b> Consulta Fallada </b><br>";
     }
    } else {
     for ($i = 0; $i < count($registro1); $i++) {
      echo "<br><i> Los registros disponibles son : </i> " . $registro1['id'];
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
 public function borrar_usuarios() {
  $db = new mysqli("localhost", "root", "", "videoclubprueba");
  if ($db->connect_errno) {
   die(" <br> Error : No se establecio la conexion . " . $db->connect_error);
  }
  echo $this->id;
  if (isset($_POST['enviar2']) && !empty($this->id)) {
   if ($this->consultar_return_borrar() == $_POST['idb']) {
    $ver = $resultado = $db->query("DELETE FROM usuarios WHERE id = '$this->id'");
    if ($ver == true) {
     echo "<br> <b> Registro Borrado CON EXISTO </b>";
     $db->close();
    }
   } else {
    echo "<br> <b> Registro NO Borrado </b><br>";
    echo "<br> <b> Comprueba Id es correcto </b><br>";
    $db->close();
   }
  } else {
   echo " <br> Sin Accceso al Registro <br> Introduce el <b>id</b> en el campo <b>id</b> ";
  }
 }

 /**
  * 
  * @return type
  */
 public function consultar_return_borrar() {
  $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
  $resultado = $mysqli->query("SELECT id FROM usuarios where id LIKE '" . $this->id . "' ; ")
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
    if ($this->id == $campo) {
     echo "<br>Registro Encontrado :  <br>" . $this->id;
     return $this->id;
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

$us = new usuarios();
$us->consultar_usuarios();
echo "Formulario para insertar datos ";
if (isset($_POST['enviar'])) {
 echo "<br>";
 echo $us->id = $_POST['id'];
 echo "<br>";
 echo $us->user = $_POST['user'];
 echo "<br>";
 echo $us->pass = $_POST['pass'];
// $us->anadir_usuarios();
 $us->actualizar_usuarios_completo();
}
?>
<html>
   <head>
      <meta charset="UTF-8">
      <title> Formulario para recoger datos de Usuarios </title>
   </head>
   <body>
      <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
         <br>
         Id : <input type="text" name="id" value="">
         <br>
         User :  <input type="text" name="user" value="">
         <br>
         Pass :  <input type="text" name="pass" value="">
         <br>
         <input type="submit" name="enviar" value="Enviar">
      </form> 
   </body>
</html>
<hr>
<?php
$us = new usuarios();
echo "<br>Formulario para insertar datos ";
if (isset($_POST['enviar1'])) {
 echo "<br>";
 $us->id = $_POST['id'];
 echo "<br>";
 $us->id_nuevo = $_POST['id1'];
 echo "<br>";
// $us->actualizar_usuarios_por_cod();
// $us->consultar_usuarios();
// $us->consultar_usuarios();
}
?>
<html>
   <head>
      <meta charset="UTF-8">
   </head>
   <body>
      <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
         <br>
         Id Antiguo : <input type="text" name="id" value="">
         <br>
         Id Nuevo :  <input type="text" name="id1" value="">
         <br>
         <input type="submit" name="enviar1" value="Enviar">
      </form> 
   </body>
</html>
<hr>
<?php
$us = new usuarios();
echo "Formulario para BORRAR ";
if (isset($_POST['enviar2'])) {
 $us->id = $_POST['idb'];
// $us->borrar_usuarios();
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
         Borrar Id : <input type="text" name="idb" value="">
         <br>
         <input type="submit" name="enviar2" value="Enviar">
      </form> 
   </body>
</html>
<hr>