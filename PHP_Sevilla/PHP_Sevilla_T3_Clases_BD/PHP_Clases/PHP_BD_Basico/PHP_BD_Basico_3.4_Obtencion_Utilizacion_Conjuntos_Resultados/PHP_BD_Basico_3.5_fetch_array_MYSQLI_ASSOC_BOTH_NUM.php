<!--
    @Created on : 25-nov-2016, 19:45:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : UPDATE `stock` SET `unidades`= 10 WHERE 1 and fecha = '1993';
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <style>
    /**
    div{
      background-color: #ccffff;
      font-family: fantasy;
      height: 40px;
      width: 250px;
    }
    p {
      background-color: #999999;
      width: 250px;
      height: 40px;
    }
    */
  </style>
  <body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "world");

    if (mysqli_connect_errno()) {
      printf("Fallo la conexion failed: %s\n", $mysqli->connect_error);
      exit("Conexion Abortada");
    }

//    $query = "SELECT Name , CountryCode FROM City ORDER BY ID LIMIT 3 ";
    $query = "SELECT Name , CountryCode FROM City";
    $result = $mysqli->query($query);

//    echo '<p>';
    $row = $result->fetch_array(MYSQLI_NUM);
    printf("%s (%s)\n", $row[0], $row[1]);
//    echo '</p>';
//    echo '<p>';
    $row1 = $result->fetch_array(MYSQLI_ASSOC);
    printf("%s (%s)\n", $row1["Name"], $row1["CountryCode"]);
//    echo '</p>';

    $row2 = $result->fetch_array(MYSQLI_BOTH);
    printf("%s (%s)\n", $row2[0], $row2["CountryCode"]);

    /* liberar la serie de resultados */
    $result->free();
    /* cerrar la conexión */
    $mysqli->close();
    ?>
  </body>
</html>
