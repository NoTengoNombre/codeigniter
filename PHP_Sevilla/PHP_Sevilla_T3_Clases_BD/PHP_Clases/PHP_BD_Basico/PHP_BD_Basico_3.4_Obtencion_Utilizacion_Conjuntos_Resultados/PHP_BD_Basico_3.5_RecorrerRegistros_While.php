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
  </style>
  <body>
    <?php
    $dwes = new mysqli('localhost', 'root', '', 'almacen');
    $error = $dwes->connect_errno;
    if ($error != null) {
      print "<p>Se ha producido el error : " . $dwes->connect_error . '</p>';
      exit("Conexion Abortada" . $dwes->connect_errno);
    }
    $resultado = $dwes->query('SELECT producto , unidades FROM stock ;', MYSQLI_USE_RESULT);
    $stock_array = $resultado->fetch_array();
    echo '<div> Obtener el 1º campo :';
    $id = $stock_array['producto'];
    $unidades = $stock_array['unidades'];
    print "<p style='color : #ff0000' > Producto : " . $id . " Unidades : " . $unidades . "</p>";
    echo '</div>';
    $stock_objetos = $resultado->fetch_object();
    while ($stock_objetos != null) {
      print "<p style='color : #3344dd'> Producto : " . $stock_objetos->producto . " - Unidades : " . $stock_objetos->unidades . " </p>";
      $stock_objetos = $resultado->fetch_object();
    }

    echo '<hr>';
    $conexion = new mysqli('localhost', 'root', '', 'world');
    if (mysqli_connect_errno()) {
      printf("fallo la conexion : %s\n", $conexion->connect_error);
      exit("Conexion abortada");
    }

    $query = "SELECT Name , CountryCode FROM City ORDER by ID LIMIT 3";
    $result = $conexion->query($query);

//    array numerico
    $row = $result->fetch_array(MYSQLI_NUM);
    printf("%s (%s)\n", $row[0], $row[1]);

    $row2 = $result->fetch_array(MYSQLI_ASSOC);
    printf("%s (%s)\n", $row[0], $row['1']);
    
    
    
    ?>
  </body>
</html>
