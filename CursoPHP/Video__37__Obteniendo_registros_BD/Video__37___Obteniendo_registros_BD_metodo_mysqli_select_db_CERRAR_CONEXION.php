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
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BD";
      exit();
    }

//    forma de seleccion de la bd 
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la Base de Datos");

//    codificacion para la conexion
    mysqli_set_charset($conexion, "utf8");


    $insertar = "SELECT * FROM datospersonales";

    $resultado = mysqli_query($conexion, $insertar);

//    Solo muestra una linea 
//    Hemos creado un ResultSet "tabla virtual" 
//    lo que hace es acceder 
//    al 1º registro de la maquina virtual
//    si lo llamas 2º vez pasa a la siguiente linea
//    si lo llamas 3º vez pasa a la siguiente linea
    $registros = 1;

//    Ejecuta mientras haya informacion
//    Cuando entra por 1º vez ejecuta mysqli_fetch_row y es porque hay registros
//    la funcion hace que entre en el 1º registro 
//    Y asi hasta que se quede sin registros , cuando se quede sin registro
//    devuelve FALSE y sale
//    while (($fila = mysqli_fetch_row($resultado)) == true) {
//      echo $fila[0] . " ";
//      echo $fila[1] . " ";
//      echo $fila[2] . " ";
//      echo $fila[3] . " ";
//      $registros++;
//      echo '<hr>';
//    }
    echo "---------------------------------<BR>";
//                                    $resultado = POR DEFECTO ES TRUE   
    while ($fila = mysqli_fetch_row($resultado)) {
      echo $fila[0] . " ";
      echo $fila[1] . " ";
      echo $fila[2] . " ";
      echo $fila[3] . " ";
      echo '<br>';
    }

//    Para liberar memoria - cerrar conexion
    mysqli_close($conexion);
    ?>
  </body>
</html>
