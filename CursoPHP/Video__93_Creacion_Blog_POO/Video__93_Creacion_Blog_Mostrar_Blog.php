<!--
    @Created on : 30-dic-2016, 19:33:22
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

Rescatar la informacion de la tabla - mediante un select

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

//    Saca todas las entrada del blog
    $miconsulta = "SELECT * FROM contenido ORDER BY Fecha DESC"; // ordenacion ascedente por defecto - DE MAYOR A MENOR - + ANTIGUA A LA + NUEVA

    if (mysqli_query($miconexion, $miconsulta)) {
//      ESTO LEE UNA ENTRADA
      $resultado = mysqli_query($miconexion, $miconsulta);
      while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<h3>" . $registro["Titulo"] . "</h3>";
        echo "<h4>" . $registro["Fecha"] . "</h4>";
        echo "<div style='width:400px'>" . $registro['Comentario'] . "</div><br><br>";
//        rescatar la imagen
//        SI la imagen no esta vacia : entra dentro del IF
        if ($registro['Imagen'] != "") {
//          ----------------------------------------------------------tamano de la imagen
          echo "<img src='Video__93_imagenes/" . $registro['Imagen'] . "' width='100' />";
        }
        echo "<hr>";
      }
    }
    ?>
    <a href="Video__93_Creacion_Blog_Mostrar_Blog.php">Ver Mostrar Blog</a>
  </body>
</html>
