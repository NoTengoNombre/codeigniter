<!--
    @Created on : 24-dic-2016, 16:35:09
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Curso PHP MySQL. Consultas preparadas Evitando inyección SQL. Vídeo 49.url

• Creamos la sentencia SQL sustituyendo los valores de criterio por el simbolo ?
$sql = "SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN =?"

• Preparamos la consulta con la funcion "mysqli_prepare()" 
Esta funcion requiere 2 parametros :  
  - El objeto $conexion y la "sentencia SQL"
  - $resultado = mysqli_prepare($conexion,$sql) => La funcion devuelve objeto de tipo mysqli_stmt

• Unimos los parametros a la sentencia sql.
  De esto se encarga la funcion : mysqli_stmt_bind_param()
  Devuelve "TRUE" o "FALSE" 
   Esta funcion requiere 3 parametros : 
    el objeto mysqli_stmt(devuelto por la funcion mysqli_prepare() )
    el tipo de dato que se utilizara como criterio en sql , variable con criterio

• Ejecutar la consulta con la funcion mysqli_stmt_execute() 
   Esta funcion devuelve : TRUE o FALSE
    Necesita como parametro el objeto mysqli_stmt

• Asociar variables el resultado de la consulta.
   Esto lo conseguimos con la funcion : mysqli_stmt_bind_result() 
    Devuelve "true" o "false" 
      Necesita como parametro el objeto mysqli_stmt y tantas variables como columnas en consultas sql

• Lectura de valores
    Para ello utilizamos la funcion mysqli_stmt_fetch()
      Pide como parametro el objeto mysqli_stmt


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

//  1º  Crear la consulta
    $sql = "SELECT B , C , D , G FROM productos WHERE G= ?";
//  2º Prepara la consulta
//    creamos una variable para la consulta prepare
    $resultado = mysqli_prepare($conexion, $sql); // devuelve TRUE O FALSE si tiene exito
//  3º Valor devuelto del resultado
    $ok = mysqli_stmt_bind_param($resultado, "s", $pais /* valor que viene de formulario */);
//  4º Ejecutar la consulta
//      Este metodo me pide un objeto mysqli_stmt cuyo nombre es '$resultado'
    $ok = mysqli_stmt_execute($resultado);

    if ($ok == false) {
      echo "Error al ejecutar la consulta";
    } else {
//      Codigo para mostrar los resultados
      //   5º Devolver tantos campos como consulta
//      Variable que va a necesitar en este caso 3
//        La consulta devuelve 4 campos , necesito 4 campos y siguiendo el orden
      $ok = mysqli_stmt_bind_result($resultado, $seccion, $codigo, $precio, $pais);

      echo "Articulos encontrados: <br><br>";
//      pide el objeto devuelto por prepare
      while (mysqli_stmt_fetch($resultado)) {
        echo $seccion . " - " . $codigo . " - " . $precio . " - " . $pais . " - <br>";
      }
      mysqli_stmt_close($resultado);
    }
    ?>
  </body>
</html>

