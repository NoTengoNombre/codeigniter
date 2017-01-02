<!--
    @Created on : 29-dic-2016, 16:56:24
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $tamano_paginas = 3;

    if (isset($_GET["pagina"])) { // Si el usuario hace click en la paginacion
      if ($_GET["pagina"] == 1) {
        header("Location:Video__74_Paginacion_III_index.php");
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
    ?>
  </body>
</html>
