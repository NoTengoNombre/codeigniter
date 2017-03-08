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

//    echo $_FILES['imagen']['name'];
    echo $_FILES['archivo']['type'];
//    echo $_FILES['imagen']['size'];
//    
//    
//    1000000 bits
//    1 MB
//    Tamano del archivo viene definido por BLOB
    if ($tamano_archivo <= 1000000) {
//  CONTROLAR EL TIPO DE ARCHIVO
//      if ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif") {
//  Ruta de la carpeta destino del servidor
//    Raiz del SERVIDOR - htdoc
//      Ruta del archivo
      $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';
//    ahora pasar por la carpeta temporal a la carpeta uploads
//  Movemos la imagen del directorio temporal al directorio seleccionado
      move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo);

//    } else {
//      echo "<br>Tipo de archivo no correcto :<br>Solo admite jpeg , png , gif <br>";
//    }
    } else {
      echo "<br>tamano archivo demasiado grande";
    }

    require ('Video__86_Leer_Imagen_Servidor_datosConexion.php');

// objeto con la conexion
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

//    1º LLamar a la funcion fopen() abrir el archivo 
//     1º con esta linea estamos apuntando al archivo que queremos leer para subir a la bd
//      fopen -> flujo de datos que tenemos que cerrar
    $archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");
//    2º Para leer el archivo byte necesitamos el nombre del archivo
//      2º el tamano_archivo que se recibe de la variable superglobal $_FILES
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








