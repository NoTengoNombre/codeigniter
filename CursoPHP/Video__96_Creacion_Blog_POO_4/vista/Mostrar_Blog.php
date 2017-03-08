<!--
    @Created on : 30-dic-2016, 22:25:26
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Entrada</title>
  </head>
  <body>
    <?php
//    include ('../modelo/Manejo_Objetos.php');
    include_once '../modelo/Manejo_Objetos.php';

    try {

      $miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $manejo_objetos = new Manejo_Objetos($miconexion);

//      Array con todas las entradas de blog
      $tabla_blog = $manejo_objetos->getContenidoPorFecha();

//      Si esta vacio
      if (empty($tabla_blog)) {
        echo "<br>No hay entrada de blog aun";
      } else {
//        SI hay entradas de blog - sacar todos los valores 
//        RECORREMOS POSICION A POSICION CADA OBJETO el cual tiene todas las propiedades
//         A CADA OBJETO OBTENER sus elementos
//        Estamos escribiendo en pantalla
        foreach ($tabla_blog as $valor) {
          echo '<h3>' . $valor->getTitulo() . '</h3>';
          echo '<h4>' . $valor->getFecha() . '</h4>';
          echo "<div style='width:400px'>" . $valor->getComentario() . "</div>";

//          Si no hay imagen
          if ($valor->getImagen() != "") {

            echo "<img src='../imagenes/";

            echo $valor->getImagen() . "' width='200px' height='200px'/>";
          }
//          Dividir la entrada de blog con otra
          echo '<hr>';
        }
      }
    } catch (Exception $ex) {
      die("Error: " . $ex->getMessage());
    }
    ?>
    <br>

    <a href="../Video__96_Creacion_Blog_Formulario_.php">Volver a la Pagina de Inserccion</a>


  </body>
</html>
