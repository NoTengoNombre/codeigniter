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
      $base = new POO('mysql:host=localhost; dbname=x_pruebas', 'root', '');

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $base->exec("SET CHARACTER SET utf8");

      $sql = "SELECT C , B , G FROM productos WHERE C = ?";
//      $sql = "SELECT C , B , D , G FROM producto WHERE C=?";
//   crear consultas preparadas
//    $base
//   devuelve un objeto de tipo PDOStatement : devuelve un ResultSet
//   $base
//    Ejecutarlo con execute() al objeto PDOStatement y asociarlo a un array con fetch()
    } catch (Exception $ex) {
      die("Error : " . $ex->getMessage());
    }
    ?>
  </body>
</html>





