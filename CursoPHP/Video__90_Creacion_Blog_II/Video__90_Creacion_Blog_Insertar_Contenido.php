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
// Igual que DIE - TERMINA EL FLUJO DE EJECUCION - Termina el programa
      exit();
    }

//    vamos a subir un archivo imagen
    if ($_FILES['imagen']['error']) {

//      Aqui gestionamos los distintos errores en la subida del archivo
//      Valor ------------------'error' == 0 - no hay error
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

//      Si hay un nombre de imagen y no hay error al subir la imagen
//      Si hay un archivo con ese nombre
//      -------------------------------------- si no ha habido error == 0
      if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))) {
//        creo un variable que es destino ruta
//        La imagen pasa por un directorio temporal y luego pasa a un directorio del servidor
//        ----------------- Nombre
//         ---------------- 1º ruta de directorio - Nombre de la imagen es lo que rescataremos de la imagen
//                            Sera la informacion que hemos rescatado de la bd del campo imagen
        $destino_de_ruta = "imagenes/";
//        mover la imagen del directorio temporal al directorio del servidor de la carpeta imagenes
//        mover el archivo del directorio temporal , hacia la ruta del diretorio servidor que esta en la variable 
//        ----------------------------------------------$destino_de_ruta = "imagenes";
//        ----------------------------------------------------------------- Nombre de la imagen
        move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);

        echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
      } else {
        echo "El archivo no se ha podido copiar en el directorio de imagenes";
      }
    }

//    $miconsulta = "INSERT INTO Contenido (Titulo,Fecha,Comentario,Imagen) VALUES ('Titulo','Fecha','Comentario','Imagen')";
    
    $miconsulta = "INSERT INTO Contenido (Titulo,Fecha,Comentario,Imagen) VALUES ('Titulo','Fecha','Comentario','Imagen')";
    
    
    
    ?>
  </body>
</html>
