<!--
    @Created on : 23-dic-2016, 23:15:00
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : DELETE FROM TABLA WHERE CAMPO = CRITERIO
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $cod = $_GET["c_art"];
//    $sec = $_GET["seccion"];
//    $nom = $_GET["n_art"];
//    $pre = $_GET["precio"];
//    $fec = $_GET["fecha"];
//    $imp = $_GET["importado"];
//    $por = $_GET["p_org"];

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Error en la bd " . mysqli_error($conexion) . " - " . mysqli_errno($conexion);
      exit();
    }

    mysqli_select_db($conexion, $database) or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion, "utf8");


    $sql = "DELETE FROM productos WHERE A =\"$cod\";";

    $resultado = mysqli_query($conexion, $sql);

//    mysqli_affected_rows(conexion) -> cuantos registros/filas/tuplas afectadas - PARA INSERTAR , ACTUALIZAR , BORRAR  

    if ($resultado == false) {
      var_dump($resultado);
      echo "El borrado no ha podido realizarse";
    } else if (mysqli_affected_rows($conexion) == 0) {
      echo "No hay Articulo con ese identificador : " . mysqli_affected_rows($conexion);
    } else {
      echo "<table>";
      echo "<tr>";
      echo "<td>Nº de articulos : " . $cod . " que han sido BORRADO - " . mysqli_affected_rows($conexion) . " registros</td>";
//      echo "<td> Numero de tuplas , registros , filas : " . mysqli_affected_rows($conexion) . " afectadas </td>";
      echo"</tr>";
    }
    echo "</table>"
    ?>
  </body>
</html>
