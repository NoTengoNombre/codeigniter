<!--
    @Created on : 25-dic-2016, 13:06:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Video__56__PDO_Insertar_Eliminar_Registros_en_ BBDD
Insertar / borrar Registros BD -> CRUD 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    </style>
  </head>
  <body>
    <?php
    $busqueda_cart = $_POST["c_art"];

    try {
      $base = new PDO('mysql:host=localhost; dbname=x_pruebas', 'root', '');
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");
//      CONSULTA : DELETE  : VENTAJA MARCADORES - PARA COMODIDA
      $sql = "DELETE FROM productos WHERE A =:c_art";
      $resultado = $base->prepare($sql);
      $resultado->execute(array(":c_art" => $busqueda_cart));
      echo "Registro Eliminado";
      $resultado->closeCursor();
    } catch (Exception $ex) {
      echo
      ' Mensaje Error : ' . $ex->getMessage() .
      '<br>Codigo Error : ' . $ex->getCode() .
      '<br>Linea Error : ' . $ex->getLine();
    }
    ?>
  </body>
</html>














