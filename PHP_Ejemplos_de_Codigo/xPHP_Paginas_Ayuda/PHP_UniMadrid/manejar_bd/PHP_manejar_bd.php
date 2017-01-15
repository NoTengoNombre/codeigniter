<!--
    @Created on : 31-oct-2016, 9:17:00
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <script>

    </script>
  </head>
  <body>
    <fieldset>
      <legend>Formulario</legend>
      <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <br>
        NIF : 
        <input type="text" name="nif" value="" required>
        <br>
        Nombre : 
        <input type="text" name="nombre" value="" required>
        <br>
        Direccion : 
        <input type="text" name="direccion" value="" required>
        <br>
        Mail : 
        <input type="text" name="mail" value="" required>
        <br>
        Telefono : 
        <input type="text" name="telefono" value="" required>
        <br>
        <input type="submit" name="enviar">
      </form>
    </fieldset>
  </body>
</html>


<?php

class Cliente {

  function select() {
    $conn = new mysqli('localhost', 'root', '', 'tienda');
    if (mysqli_connect_errno()) {
      die("Error de conexion a la BD: " . $conn->connect_error . "  \n " . $conn->errno);
    }
    if (isset($_REQUEST['nif'])) {
      $sql = "SELECT * FROM cliente WHERE nif LIKE '" . $_REQUEST['nif'] . "';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "nif : " . $row["nif"] . " nombre : " . $row['nombre'] . " direccion : " . $row['direccion'] . " email : " . $row['mail'] . " telefono : " . $row['telefono'];
        }
      } else {
        echo " 0 resultados ";
      }
    }
    $conn->close();
  }

  function select_2v() {
    $mysqli = new mysqli('localhost', 'root', '', 'tienda');
    if (isset($_REQUEST['nif'])) {
      $query = "SELECT * FROM cliente WHERE nif LIKE '" . $_REQUEST['nif'] . "';";
      $resultado = $mysqli->query($query)
              OR die($mysqli->error . " en la linea " . (__LINE__ - 1));
      $numregistros = $resultado->num_rows;
      echo "<p>El numero de clientes con nombre de Empresa es : ", $numregistros, "</p>";
      echo "<table border='2'>"
      . "<tr>"
      . "<th>NIF</th>"
      . "<th>Nombre</th>"
      . "<th>Direccion</th>"
      . "<th>Email</th>"
      . "<th>Telefono</th>"
      . "</tr>";
      while ($registro = $resultado->fetch_assoc()) {
        echo "<tr>";
        foreach ($registro as $campo) {
          echo "<td>", $campo, "</td>";
        }
        echo "</tr>";
      }
      $resultado->free();
      $mysqli->close();
    }
  }

  /**
   * Error en la tabla
   */
  function select_3v() {
    $mysqli = new mysqli('localhost', 'root', '', 'tienda');
    $query = "SELECT * FROM cliente ;";
    $resultado = $mysqli->query($query)
            OR die($mysqli->error . " en la linea " . (__LINE__ - 1));
    $numregistros = mysqli_num_rows($resultado);
    echo "<p>El numero de clientes con nombre de Empresa es : ", $numregistros, "</p>";
    echo "<table border='2'>"
    . "<tr>"
    . "<th>NIF</th>"
    . "<th>Nombre</th>"
    . "<th>Direccion</th>"
    . "<th>Email</th>"
    . "<th>Telefono</th>"
    . "</tr>";
    while ($registro = mysqli_fetch_array($resultado)) {
      echo "<tr>";
      foreach ($registro as $campo) {
        echo "<td>", $campo, "</td>";
        echo "</tr>";
      }
      echo "</table>";
    }
    mysqli_free_result($resultado);
    $mysqli->close();
  }

  function insert() {
    $conn = new mysqli('localhost', 'root', '', 'tienda');
    if (mysqli_connect_errno()) {
      die("Error de conexion a la BD: " . $conn->connect_error . "  \n " . $conn->errno);
    }
    if (isset($_REQUEST['nif'], $_REQUEST['nombre'], $_REQUEST['direccion'], $_REQUEST['mail'], $_REQUEST['telefono'])) {
      $sql = "INSERT INTO cliente (nif, nombre, direccion, mail, telefono) VALUES ('" . $_REQUEST['nif'] . "', '" . $_REQUEST['nombre'] . "', '" . $_REQUEST['direccion'] . "', '" . $_REQUEST['mail'] . "', '" . $_REQUEST['telefono'] . "');";
      if ($conn->query($sql) === TRUE) {
        echo "Inserccion";
      } else {
        echo "No hay Nuevo registro .$sql . <br> " . $conn->error;
      }
    }
    $conn->close();
  }

  function update() {
    $conn = new mysqli('localhost', 'root', '', 'tienda');
    if ($conn->connect_errno) {
      die("Error de conexion a la BD: " . $conn->connect_error . "  \n " . $conn->errno);
    }
    if (isset($_REQUEST['nif'], $_REQUEST['nombre'], $_REQUEST['direccion'], $_REQUEST['mail'], $_REQUEST['telefono'])) {
      $sql = "UPDATE cliente SET nombre ='" . $_REQUEST['nombre'] . "' , direccion='" . $_REQUEST['direccion'] . "' , mail='" . $_REQUEST['mail'] . "' , telefono='" . $_REQUEST['telefono'] . "' WHERE nif='" . $_REQUEST['nif'] . "'; ";
      if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro";
      } else {
        echo "No hay Nuevo registro .$sql . <br> " . $conn->error;
      }
    }
    $conn->close();
  }

  function delete() {
    $conn = new mysqli('localhost', 'root', '', 'tienda', '3306', 'mysqli.default_socket');
    if ($conn->connect_errno) {
      die("Error de conexion a la BD : " . $conn->connect_error . " \n " . $conn->connect_errno);
    }
    if (isset($_REQUEST['nif'])) {
      $sql = "DELETE FROM cliente WHERE nif = '" . $_REQUEST['nif'] . "';";
      if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
          echo "Borrado correcto : " . $sql;
        } else {
          $filas = $conn->affected_rows;
          echo "No hay registros disponibles para borrar : " . $filas . " filas";
        }
      } else {
        echo "Depurar consulta : " . $sql;
        echo '<br>';
        echo "Error Borrado connect_errno " . $conn->connect_errno;
        echo '<br>';
        echo " connect_error : " . $conn->connect_error;
        echo '<br>';
      }
    }
    $conn->close();
  }

}

$cliente = new Cliente();
//$cliente->update();
//$cliente->delete();
//$cliente->select_2v();
$cliente->select_3v();
