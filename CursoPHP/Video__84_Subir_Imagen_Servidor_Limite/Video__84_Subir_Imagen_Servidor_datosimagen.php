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
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamano_imagen = $_FILES['imagen']['size'];

//    echo $_FILES['imagen']['name'];
    echo $_FILES['imagen']['type'];
//    echo $_FILES['imagen']['size'];
//    
//    
//    1000000 bits
//    1 MB
    if ($tamano_imagen <= 1000000) {
//  CONTROLAR EL TIPO DE ARCHIVO
      if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif") {
//  Ruta de la carpeta destino del servidor
//    Raiz del SERVIDOR - htdoc
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';
//    ahora pasar por la carpeta temporal a la carpeta uploads
//  Movemos la imagen del directorio temporal al directorio seleccionado
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);
      } else {
        echo "<br>Tipo de archivo no correcto :<br>Solo admite jpeg , png , gif <br>";
      }
    } else {
      echo "<br>tamano demasiado grande";
    }

    require ('Video__84_Subir_Imagen_Servidor_datosconexion.php');

// objeto con la conexion
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

//    $sql = "INSERT INTO productos (FOTO) VALUES ('$nombre_imagen') WHERE CODIGOARTICULO = 'AR01';"; // funciona
//    $sql = "INSERT INTO productos (FOTO) VALUES ('$nombre_imagen');"; // funciona

    $insertar = "UPDATE productos set FOTO='$nombre_imagen' WHERE codart = 'AR01';"; // funciona
    $resultados = mysqli_query($conexion, $insertar);
    ?>
  </body>
</html>
