<!--
    @Created on : 30-dic-2016, 14:54:12
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
    $Id = "";

    $contenido = "";

    $tipo = "";

    require ('./Video__87_Leer_Archivo_Servidor_datosConexion.php');

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD");

    mysqli_set_charset($conexion, "utf8");

//    Id lo traemos desde un formulario
    $consulta = "SELECT * FROM archivos WHERE Id=11";

    $resultado = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultado)) {
      $Id = $fila["Id"];
      $contenido = $fila["Contenido"];
      $tipo = $fila["Tipo"];
    }
    echo "Id: " . $Id;
    echo '<hr>';
    echo "Tipo: " . $tipo;
    echo '<hr>';
//    echo "Contenido:  " . $contenido;
//    Para decodificar necesitamos un contenedor 
//    que muestre lo que tiene dentro , dentro hay una imagen
//    para las imagenes usamos <img src , 
//    si fuera un pdf usamos un iframe , o un div 
//    Meter la imagen en un contenedor de imagenes
//    echo "<img src='$contenido'>";
//    1º Decodificar la imagen 
    echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";
    ?>
  </body>
</html>











