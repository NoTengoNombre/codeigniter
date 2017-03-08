<!--
    @Created on : 25-dic-2016, 1:15:31
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Curso PHP MySQL. PDO Consultas preparadas. Vídeo 53
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    try {
//  Objeto : de tipo conexion
      $base = new PDO('mysql:host=localhost; dbname=x_pruebas', 'root', '');

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $base->exec("SET CHARACTER SET utf8");

//      $sql = "SELECT C , B , G FROM productos WHERE C = ?";
      $sql = "SELECT * FROM productos WHERE C = ?";

//    llamamos al objeto conexion y hacemos la conexion con prepare(sql)
//      Objeto $base llama por parametro la consulta
//        prepare devuelve un objeto de tipo PDOstatement que se almacena en la variable $resultado que es otro objeto
//      $resultado es un objeto de tipo PDOStatement
      $resultado = $base->prepare($sql);
//                        Pasarle por parametro 
//      $resultado->execute(array("Destornillador"));
      $resultado->execute(array("Tubos"));

      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

        echo "Nombre Articulo " . $registro['C'] . ' ';
        echo "Seccion " . $registro['B'] . ' ';
        echo "Precio " . $registro['D'] . ' ';
        echo "Pais de Origen " . $registro['G'] . ' ';
        echo '<br>';
//        Despues tenemos que cerrar el cursor
      }
      $resultado->closeCursor();
    } catch (Exception $ex) {
      die("Error : " . $ex->getMessage());
    }
    ?>
  </body>
</html>





