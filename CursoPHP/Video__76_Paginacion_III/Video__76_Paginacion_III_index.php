<!--
    @Created on : 29-dic-2016, 14:32:54
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Paginacion en grupos de 3 

Para saltar 

$_GET - Podemos Rescatar/Coger los valores que le pasamos a la URL de la pagina ,
        El usuario pulsa el 3 , se envia a la URL ese valor 3 , la variable SuperGlobal GET lo rescata de la URL
        Y cuando recarguemos vamos a saber si queremos ver la pagina 2 , 3 , 4 se elegira la pagina que queremos visitar
        - Si se selecciona el 2 y se lo paso a la URL , a la propia pagina , podemos rescatarlo desde la propia pagina
        con el GET , cojo ese 2 de la URL y ya sabemos que el usuario quiere ver esta pagina.
         Cogemos el numero de la pagina desde la URL mediante el GET y la usamos para seleccionar la pagina que queramos
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Paginacion</title>
  </head>
  <body>
    <?php
    try {
      $base = new PDO("mysql:host=localhost; dbname=pruebas1", "root", "");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");

      $tamano_paginas = 3;

      if (isset($_GET["pagina"])) { // Si el usuario hace click en la paginacion
        if ($_GET["pagina"] == 1) {
          header("Location:Video__76_Paginacion_III_index.php");
        } else {
          $pagina = $_GET["pagina"];
        }
      } else {
        $pagina = 1;
      }

      $empezar_desde = ($pagina - 1 ) * $tamano_paginas;

      $sql_total = "SELECT nombrearticulo , seccion , precio , paisdeorigen FROM productos WHERE seccion='deportes'";
      $resultado = $base->prepare($sql_total);
      $resultado->execute(array());
      $num_filas = $resultado->rowCount(); // total de registros
      $total_paginas = ceil($num_filas / $tamano_paginas);

      echo "Numero de registros de la consulta : " . $num_filas . "<br>";
      echo "Mostramos : " . $tamano_paginas . " registros por paginas <br>";
      echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<br>";
      echo "<hr>";
      echo "<hr>";
      $sql_limite = "SELECT nombrearticulo , seccion , precio , paisdeorigen FROM productos WHERE seccion='deportes' LIMIT $empezar_desde,$tamano_paginas;";
      $resultado = $base->prepare($sql_limite);
      $resultado->execute(array());
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo
        "Nombre Articulo: " . $registro["nombrearticulo"] .
        "<br>Seccion: " . $registro["seccion"] .
        "<br>Precio: " . $registro["precio"] .
        "<br>Pais : " . $registro["paisdeorigen"] . '<br><hr>';
      }
    } catch (Exception $ex) {
      die("Error " . $ex->getMessage() . " - Linea de Error : " . $ex->getLine());
    }
    for ($i = 1; $i <= $total_paginas; $i++) {
      echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
    }
    $resultado->closeCursor();
    ?>
  </body>
</html>
