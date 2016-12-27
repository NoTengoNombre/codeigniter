<!--
    @Created on : 24-dic-2016, 1:07:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
3º archivos 
-Formulario de busqueda.
-Resultado de busqueda.
-Actualizar la informacion. ( actualizar los archivos )


-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["n_art"];
    $pre = $_GET["precio"];
    $fec = $_GET["fecha"];
    $imp = $_GET["importacion"];
    $por = $_GET["p_org"];

    $host = "localhost"; 
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Fallo en la conexion bd";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("No se puede conectar BD");

    mysqli_set_charset($conexion, "utf8");

//    $consulta = "INSERT INTO producto ('a','b','c','d','e','f','g') VALUES ('a','a','a','a','a','a','a');";
    $consulta = "UPDATE productos SET A='$cod' , B='$sec', C='$nom' , D='$pre' , E='$fec' , F='$imp' , G='$por' WHERE cod='$cod';";
 
    $resultado = mysqli_query($conexion, $consulta);

//    Meter lo que hay en una tabla meterlo en un formulario
    if ($resultado == false) {
      echo "Error en la conexion ";
    } else {
      echo "Registro guardado";
      echo "<table>";
      echo "<tr><td>$cod</td></tr>";
      echo "<tr><td>$sec</td></tr>";
      echo "<tr><td>$nom</td></tr>";
      echo "<tr><td>$pre</td></tr>";
      echo "<tr><td>$fec</td></tr>";
      echo "<tr><td>$imp</td></tr>";
      echo "<tr><td>$por</td></tr>";
      echo "</tr></td>";
    }
    echo "</table>";
    ?>
  </body>
</html>
