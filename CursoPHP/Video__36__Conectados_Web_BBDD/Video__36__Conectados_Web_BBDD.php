<!--
    @Created on : 23-dic-2016, 13:17:41
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

//    conexion por funcion
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

//    variable almacena consulta
    $insertar = "SELECT * FROM datospersonales";
//    ResultSet o RecordSet 
//    - TABLA VIRTUAL : Crear una tabla en la memoria 
//    donde carga toda la informacion 
//    que nos devuelve sentencia sql
//    4 campos y todos los registros
//  Esta tabla virtual la hemos 
//    almacenado en una variable  
    $resultado = mysqli_query($conexion, $insertar);
//  Para ver toda informacion de la base de datos usamos
//  la funcion :
//  mysqli_fetch_row -> Ve Linea a Linea la informacion 
//                       que tiene dentro de la tabla virtual
//    
//  Esto fila : ES UNA ARRAY - La funcion mysqli_fetch_row convierte las filas en
//    un ARRAY
    $fila = mysqli_fetch_row($resultado);

    echo $fila[0] . " ";
    echo '<br>';
    echo $fila[1] . " ";
    echo '<br>';
    echo $fila[2] . " ";
    echo '<br>';
    echo $fila[3] . " ";

    echo '<hr>';

    for ($i = 0; $i < count($fila); $i++) {
      echo $fila[$i];
      echo '<br>';
    }
    ?>
  </body>
</html>
