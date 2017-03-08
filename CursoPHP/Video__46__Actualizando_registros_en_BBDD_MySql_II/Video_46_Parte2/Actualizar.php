<!--
    @Created on : 24-dic-2016, 11:12:42
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
    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["n_art"];
    $pre = $_GET["precio"];
    $fec = $_GET["fecha"];
    $imp = $_GET["importado"];
    $por = $_GET["p_orig"];

    $host = "localhost";
    $user = "root";
    $database = "x_pruebas";
    $password = "";


    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $database);

    mysqli_set_charset($conexion, "utf8");

// Actualiar los valores de la base de datos mediante el nombre articulo
    $sql = "UPDATE productos SET A='$cod', B = '$sec' , C='$nom' , D='$pre' , E='$fec' , F='$imp' , G='$por' WHERE C='$nom';";

    $resultados = mysqli_query($conexion, $sql);

//    var_dump($resultados);
    
    if ($resultados == false) {
      echo "Error en la consulta";
    } else {
// Muestra los datos de una tabla a formulario
      echo "<h1>Registro Guardado<br></h1>";
      echo "<table>";
      echo "<tr><td>";
      echo "<tr><td>$cod</tr></td>";
      echo "<tr><td>$sec</tr></td>";
      echo "<tr><td>$nom</tr></td>";
      echo "<tr><td>$pre</tr></td>";
      echo "<tr><td>$fec</tr></td>";
      echo "<tr><td>$imp</tr></td>";
      echo "<tr><td>$por</tr></td>";
      echo '</table>';
    }
    echo '<br>';
//    mysqli_free_result($resultados);
    mysqli_close($conexion);
    ?>
  </body>
</html>
