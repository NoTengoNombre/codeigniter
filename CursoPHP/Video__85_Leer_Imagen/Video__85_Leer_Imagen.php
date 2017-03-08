<!--
    @Created on : 30-dic-2016, 12:31:23
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
    require("./Video__85_Leer_Imagen_Servidor_datosconexion.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

//    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD ". mysqli_error_list($conexion));
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD ");
    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT foto FROM productos WHERE CODART='AR01';";

//    Array resultado " RESULTSET " 
    $resultado = mysqli_query($conexion, $consulta);

//    $resultado -> donde tengo nuestro array
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
//      tengo que guardar el valor de la foto en una variable 
      $ruta_img = $fila["foto"];
//      tengo que construir una tabla
    }
    ?>

    <div>
      <img src="/intranet/uploads/<?php echo $ruta_img; ?>" alt="imagen_del_articulo" width="230">
    </div>


  </body>
</html>
