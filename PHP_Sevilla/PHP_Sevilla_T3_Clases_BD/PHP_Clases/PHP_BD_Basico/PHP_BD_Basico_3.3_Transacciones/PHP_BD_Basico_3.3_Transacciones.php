<!--
    @Created on : 25-nov-2016, 19:30:37
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Transacciones</title>
  </head>
  <body>
    <?php
    $dwes = new mysqli('localhost', 'root', '', 'world'); // crea conexion
    $error = $dwes->connect_errno; // comprueba error conexion
    if ($error != null) { // null : significa correcto
      print "<p>Se ha producido el error : " . $dwes->connect_error . '</p>';
      exit("Conexion Abortada" . $dwes->connect_errno);
    }
//    Definimos una variable para comprobar la ejecucion de las consultas;
    $todo_bien = true;
    $dwes->autocommit(false); //    Iniciamos la transaccion
    $sql = "DELETE FROM city WHERE id = '0' "; //  creamos consulta
    if ($dwes->query($sql) != true) { // consulta es falsa
      $todo_bien = false;
      "SELECT * FROM city";
    }
    if ($dwes->query($sql) != true) {
      $todo_bien = false;
//      Si todo fue bien , confirmamos los cambios 
//      y en caso contrario los deshacemos
    }
    if ($todo_bien == true) {
      $dwes->commit();
      print "<p>Los cambios se han realizado correctamente</p>";
    } else {
      $dwes->rollback();
      print "<p>No se han podido realizar los cambios</p>";
    }
    $dwes->close();
    unset($dwes);
    ?>
  </body>
</html>












