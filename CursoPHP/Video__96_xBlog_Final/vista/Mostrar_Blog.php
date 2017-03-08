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
    include_once '../modelo/Manejo_Objetos.php';

    try {

      $miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $manejo_Objetos = new Manejo_Objetos($miconexion);

      $tabla_blog = $manejo_Objetos->getContenidoPorFecha();

      if (empty($tabla_blog)) {
        echo "No hay entradas de blog aun";
      } else {
        foreach ($tabla_blog as $valor) {
          echo "<h3>" . $valor->getTitulo() . "</h3>";
          echo "<h4>" . $valor->getFecha() . "</h4>";
          echo "<div style='width:400px'>";
          echo $valor->getComentario() . '</div>';

          if ($valor->getImagen() != "") {
            echo "<img src='../imagenes/";
            echo $valor->getImagen() . "' width='300px' height='200' />";
          }
          echo "<hr>";
        }
      }
    } catch (Exception $ex) {
      die("Error : " . $ex->getMessage());
    }
    ?>
    <br>
    <a href="./Formulario.php">Volver a la Pagina de Inserccion</a>
  </body>
</html>
