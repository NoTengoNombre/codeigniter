<!--
    @Created on : 30-dic-2016, 11:04:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
//    Recibimos los datos de la imagen
//    Usar variable superglobal : ARRAY SUPERGLOBAL VARIOS DATOS DE LA IMAGEN
//    QUE LE ESTAMOS ENVIANDO
//     Podemos almacenar informacion 
//   •   type - tipo de archivo -> 
//   •   name - nombre archivo -> 
//   •   size - tamaño de la imagien -> 
     •   tmp_name - direccion de la directorio temporal donde se almacena el archivo antes de subirse al servidor
        porque antes de subirse la imagen al servidor , 
        1º se almacena en un directorio temporal del servidor
        2  se almacena en el directorio de imagenes del servidor
     •   error

carpeta temporal 

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $nombre_archivo = $_FILES['archivo']['name'];
    $tipo_archivo = $_FILES['archivo']['type'];
    $tamano_archivo = $_FILES['archivo']['size'];

    echo $_FILES['archivo']['type'];

    if ($tamano_archivo <= 1000000) {

      $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

      move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo);
    } else {
      echo "<br>tamano archivo demasiado grande";
    }

    require ('Video__86_Leer_Imagen_Servidor_datosConexion.php');

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");

    $contenido = fread($archivo_objetivo, $tamano_archivo);

    $contenido = addslashes($contenido);

    fclose($archivo_objetivo);

    $sql = "INSERT INTO archivos (Id,Nombre,Tipo,Contenido) VALUES (0,'$nombre_archivo','$tipo_archivo','$contenido');";

    $resultados = mysqli_query($conexion, $sql);

    if (mysqli_affected_rows($conexion) > 0) {
      echo 'Inserccion correcta';
    } else {
      echo 'Inserccion NO CORRECTA';
    }
    ?>
  </body>
</html>








