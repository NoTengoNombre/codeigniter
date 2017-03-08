<!--
    @Created on : 30-dic-2016, 18:21:53
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
    $miconexion = mysqli_connect("localhost", "root", "", "bbddblog");


    if (!$miconexion) {
      echo "La conexion ha fallado : " . mysqli_error();
      exit();
    }

    if ($_FILES['imagen']['error']) {

      switch ($_FILES['imagen']['error']) {
        case 1 : // Error exceso de tamanio de archivo en php.ini
          echo "El tamanio del archivo excede lo permitido por le servidor";
          break;
        case 2 : // Error tamano archivo marcado desde formulario 
          echo "El tamano del archivo excede 2 MB";
          break;
        case 3 : // 
          echo "Error en la transmision . Corrupcion del archivo";
          break;
        case 4 : // No hay fichero
          echo "No se ha enviado ningun archivo";
          break;
      }
    } else {

      echo "Entrada subida correctamente<br>";

      if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))) {
        $destino_de_ruta = "Video__92_imagenes/";
//        Mover la imagen del directorio temporal a un directorio imagenes dentro del servidor
        move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);

        echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
      } else {
        echo "El archivo no se ha podido copiar en el directorio de imagenes";
      }
    }

//    Informacion que viene del formulario
    $eltitulo = $_POST['campo_titulo'];
    $lafecha = date("Y-m-d H:i:s");
    $elcomentarios = $_POST['area_comentarios'];
    $laimagen = $_FILES['imagen']['name']; // rescatamos el nombre de la imagen del formulario
//    cambiar el campo por la informacion que viene del formulario 
    $miconsulta = "INSERT INTO Contenido (Titulo,Fecha,Comentario,Imagen) VALUES ('" . $eltitulo . "', '" . $lafecha . "','" . $elcomentarios . "','" . $laimagen . "')";

    $resultado = mysqli_query($miconexion, $miconsulta);

    mysqli_close($miconexion);

    echo "<br /> Se ha agregado el comentario con exito <br><br>";
    ?>

    <a href="Video__92_Creacion_Blog_Formulario.php">Añadir nueva entrada</a>

    <a href="Video__92_Creacion_Blog_Mostrar_Blog.php">Ver Mostrar Blog</a>
  </body>
</html>
