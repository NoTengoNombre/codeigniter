<!--
    @Created on : 27-nov-2016, 17:57:43
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
    $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '');
//    Definimos una variable
    $todo_bien = true;
//    Iniciamos la tansaccion
    $dwes->beginTransaction();
    $sql = "UPDATE stock SET unidades='1' WHERE producto='PAPYRE62GB' AND tienda='1'";
    if ($dwes->exec($sql) == 0) {
      $todo_bien = false;
      $sql = "INSERT INTO 'stock' ('producto','tienda','unidades') VALUES ('PAPYRE62GB',2,1)";
      if ($dwes->exec($sql) == 0) {
        $todo_bien = false;
      }
      if ($todo_bien == true) {
        $dwe->commit();
        print "<p>Los cambios se han realizado correctamente </p>";
      } else {
        $dwes->rollback();
        print "<p>No se han podido realizar los cambios </p>";
      }
      unset($dwes);
    }
    ?>
  </body>
</html>
