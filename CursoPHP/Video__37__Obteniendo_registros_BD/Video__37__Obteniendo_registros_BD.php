<!--
    @Created on : 23-dic-2016, 13:38:50
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
    $db_host = "localhost";
    $db_nombre = "x_pruebas";
    $db_usuario = "root";
    $db_contra = "";

//    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BD";
      exit();
    }

//    forma de seleccion de la bd 
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la Base de Datos");

//    codificacion para la conexion
    mysqli_set_charset($conexion, "utf8");


    $consulta = "SELECT * FROM datospersonales";

    $resultado = mysqli_query($conexion, $consulta);

    $fila = mysqli_fetch_row($resultado);

    echo $fila[0];
    echo '<br>';
    echo $fila[1];
    echo '<br>';
    echo $fila[2];
    echo '<br>';
    echo $fila[3];

    echo '<hr>';

    foreach ($fila as $registro) {
      echo $registro;
      echo '<br>';
    }
    ?>
  </body>
</html>
