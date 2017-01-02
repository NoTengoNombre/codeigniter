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
    include ("../modelo/Objeto_Blog.php");
    include ("../modelo/Manejo_Objetos.php");

    try {

      $miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');

      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    comprueba si la entrada al blog tiene una serie de caracteristicas
      if ($_FILES['imagen']['error']) {
        switch ($_FILES['imagen']['error']) {
          case 1:
            echo "El tamaño del archivo supera el limite permitido por el servidor (param upload_max_size de php.ini)";
            break;
          case 2:
            echo "Tamaño permitido sobrepasado (post_max_size de php.ini)";
            break;
          case 3:
            echo "El envio del archivo se ha interrumpido durante la transmision";
            break;
          case 4:
            echo "Error en el archivo enviado";
            break;
        }
      } else {

        echo "No hay error en la transferencia del archivo";

        if (isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)) {
          $destino_de_ruta = 'Video__95_imagenes';
          move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
          echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
        } else {
          echo "El archivo no se ha copiado en el directorio de imagenes";
        }
      }

//      manejo de objetos nos pide que le pasemos un objeto con la conexion a la bd y 
//      es el objeto que hemos creado hace un instante
      $manejo_objetos = new Manejo_Objetos($miconexion);
//      crear un objeto de tipo blog para parsarle todas las propiedades
//      USAMOS EL OBJETO POR DEFECTO
      $blog = new Objeto_Blog();
//     llamada al
      $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
//     Este campo no viene del formulario , se establece directamente desde aqui con la clase DATE 
      $blog->setFecha(Date("Y-m-d H:i:s"));
      $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
      $blog->setImagen($_FILES['imagen']['name']);
//      COGER EL OBJETO E INSERTARLO EN LA BASE DE DATOS
      $manejo_objetos->insertaContenido($blog);

      echo '<br> Entrada de blog con exito <br>';
    } catch (Exception $ex) {
      echo "Error : " . $ex->getMessage() . " - " . $ex->getLine();
    }
    ?>
  </body>
</html>
