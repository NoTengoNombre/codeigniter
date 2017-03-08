<!--
    @Created on : 24-dic-2016, 16:35:09
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Curso PHP MySQL. Consultas preparadas Evitando inyección SQL. Vídeo 49.url

 

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $pais = $_GET["buscar"];

    require 'Video__49__Consultas_preparadas_datos_conexion.php';

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en: " . $conexion . " o " . $database);

    mysqli_set_charset($conexion, "utf8");

    $sql = "SELECT B , C , D , G FROM productos WHERE G= ?";
    $resultado = mysqli_prepare($conexion, $sql); // devuelve TRUE O FALSE si tiene exito
    $ok = mysqli_stmt_bind_param($resultado, "s", $pais /* valor que viene de formulario */);
    $ok = mysqli_stmt_execute($resultado);

    if ($ok == false) {
      echo "Error al ejecutar la consulta";
    } else {
      $ok = mysqli_stmt_bind_result($resultado, $seccion, $codigo, $precio, $pais);
      echo "Articulos encontrados: <br><br>";
      while (mysqli_stmt_fetch($resultado)) {
        echo $seccion . " - " . $codigo . " - " . $precio . " - " . $pais . " - <br>";
      }
      mysqli_stmt_close($resultado);
    }
    ?>
  </body>
</html>

 