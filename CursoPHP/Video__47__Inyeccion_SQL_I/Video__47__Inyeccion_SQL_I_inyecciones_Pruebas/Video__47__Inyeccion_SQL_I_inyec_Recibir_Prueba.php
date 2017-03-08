<!--
    @Created on : 24-dic-2016, 12:44:51
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : cenicero' or '1'='1
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $usuario = $_GET["usu"];
    $contra = $_GET["con"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Error en la conexion BBDD";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la conexion");

    mysqli_set_charset($conexion, "utf8");

//    Funcion original - Muestra todos los valores - Como buscador
//    $consulta = "SELECT * FROM productos WHERE C LIKE '%$busqueda%';";
//    Consulta necesita introducir todos los datos - No Funciona como buscador
//    $consulta = "SELECT * FROM usuarios WHERE usuario=$usuario AND contra=$contra";
//    $consulta = "SELECT * FROM usuarios";
//    Para sacar todos los password de la BBDD : 
//    'or '1'='1 <-- INYECCION BASICA
    $insertar = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contra='$contra' ";

    echo "$insertar<br><br>";

    $resultado = mysqli_query($conexion, $insertar);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
      echo "<table>";
      echo "<tr>";
      echo "<td>";
      $fila["usuario"] . "</td><td>";
      $fila["contra"] . "</td><td>";
      $fila["tlno"] . "</td><td>";
      $fila["direccion"] . "</td><td>";
      echo "<br>";
      echo "</td>";
      echo "</tr>";
      echo "<br><span style='color: #f00'> - Datos Personales : " . $fila['usuario'] . " - " . $fila['contra'] . " - " . $fila['tlno'] . " - " . $fila['direccion'] . '</span><br>';
      echo "</table>";
    }
    ?>
  </body>
</html>
