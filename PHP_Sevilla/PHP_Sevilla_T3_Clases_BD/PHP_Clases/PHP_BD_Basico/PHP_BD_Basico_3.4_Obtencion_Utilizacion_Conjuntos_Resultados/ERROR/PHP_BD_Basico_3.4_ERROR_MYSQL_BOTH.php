<!--
    @Created on : 25-nov-2016, 19:45:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $dwes = new mysqli('localhost', 'root', '', 'world');
    $error = $dwes->connect_errno;
    if ($error != null) {
      print "<p>Se ha producido el error : " . $dwes->connect_error . '</p>';
      exit("Conexion Abortada" . $dwes->connect_errno);
    }

//    Variable comprobar ejecucion consultas
    $todo_bien = true;
    $dwes->autocommit(false);
    $sql = "SELECT id,name FROM city";
    if ($dwes->query($sql) != true) {
      $todo_bien = false;
    }
    if ($todo_bien == true) {
//      Comportamiento por defecto , devuelve array con claves numericas y asociativas
      $resultado = $dwes->query($sql,MYSQLI_BOTH);
      $stock_objetos = $resultado->fetch_array();
      $id = $stock_objetos['0'];
      $nombre = $stock_objetos['1'];
      print "<p>Lista :  " . $id . " - " . $nombre . " </p>";
      $dwes->commit();
    } else {
      $dwes->rollback();
      print "<p>No se han podido realizar los cambios </p>";
    }
    $dwes->close();
    unset($dwes);
    ?>
  </body>
</html>
