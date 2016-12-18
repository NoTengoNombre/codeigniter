<!--
    @Created on : 16-dic-2016, 19:02:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Obtiene el número de filas afectadas en la última operación MySQL
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "world");

    if ($mysqli->connect_error) {
      printf("<b>Conexion fallada : %s\n", mysqli_connect_error() . '</b>');
      echo '<br>Que tipo soy : ' . gettype($mysqli);
      echo $mysqli->error_list;
      print_r($mysqli->error_list);
      exit();
    }

    $result = $mysqli->query("SELECT Name FROM city");
    print("Affected rows SELECT : " . $mysqli->affected_rows);
    ?>
  </body>
</html>
