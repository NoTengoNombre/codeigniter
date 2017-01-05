<!--
    @Created on : 30-dic-2016, 21:36:27
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

Se encarga de interactuar entre la vista del formulario y el modelo "BASE DE DATOS"
Vamos a crear objetos de tipo BLOG

Rescatar toda la informacion que el usuario ha ido introduciendo 
en los campos del formulario y construir un objeto 
este objeto tiene que ser de tipo blog 

Con eso objeto podemos ingresarlo en la base de datos mediante el metodo
ingresaContenido y le pasamos por parametro ese OBJETO construido y la sentencia
sql se encarga de ingresarla en la bd
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once ("../modelo/Objeto_Blog.php");
    include_once ("../modelo/Manejo_Objetos.php");

    try {

      $miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');

      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

        echo "<br>Entrada subida correctamente<br>";

        if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))) {
          $destino_de_ruta = "../imagenes/";
//        Mover la imagen del directorio temporal a un directorio imagenes dentro del servidor

          move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
          echo "<br>El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
        } else {
          echo "<br>El archivo no se ha podido copiar en el directorio de imagenes";
        }
      }

      $manejo_Objetos = new Manejo_Objetos($miconexion);
      $blog = new Objeto_Blog();
      $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
//     Este campo no viene del formulario , se establece directamente desde aqui con la clase DATE 
      $blog->setFecha(Date("Y-m-d H:i:s"));
      $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
      $blog->setImagen($_FILES["imagen"]["name"]);
      $manejo_Objetos->insertaContenido($blog);

      echo '<br> Entrada de blog Agregada </br>';
    } catch (Exception $ex) {
      die("Error : " . $ex->getMessage());
    }
    ?>
    <a href="../vista/Mostrar_Blog.php">Volver al blog</a>
  </body>
</html>
