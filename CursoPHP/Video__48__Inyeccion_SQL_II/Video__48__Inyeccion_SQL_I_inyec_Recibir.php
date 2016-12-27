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
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

//    1º Mejora : Cambiar posicion
//    $usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
//    $contra = mysqli_real_escape_string($conexion, $_GET["con"]);

    $conexion = mysqli_connect($host, $user, $password, $database);


//  2º Mejora
//    YA tenemos protegidos
//    Que guarde en las variables 
//    $usuario y $contra almacene los caracteres
//    que llegue desde el formulario
    $usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
    $contra = mysqli_real_escape_string($conexion, $_GET["con"]);

    if (mysqli_connect_errno()) {
      echo "FalLo y Error en la conexion BBDD";
      exit();
    }



    mysqli_select_db($conexion, $database) or die("Error en la conexion");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "DELETE FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA= '$contra'";

    echo "<span style='color: #f00'> " . $consulta . " '</span>";

//    3º Mejora
//    Usar Funcion : mysqli_num_rows() -> Devuelve si hay Registros o no
//     "DELETE" NO DEVUELVE ResultSet - SON CONSULTAS DE ACCION
//    Otra Funcion : mysqli_affected_rows() -> Devuelve el numero de filas afectadas
//    Tanto de una consulta de accion o seleccion
    if (mysqli_query($conexion, $consulta)) {
      echo "<br><span style='color: #00f'> " . $consulta . " '</span>";
      echo "<h1>Baja Procesada</h1>";
    }
    mysqli_close($conexion);
    ?>
  </body>
</html>
