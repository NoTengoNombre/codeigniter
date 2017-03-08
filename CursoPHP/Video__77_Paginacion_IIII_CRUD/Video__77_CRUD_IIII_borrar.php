<!--
   @Created on : 28-dic-2016, 19:16:19
   @Author     : RVS - N.F.N.D - Home
   @Pag        :
   @version    :
   @TODO       :


Create Read Update Delete -> CRUD 

- Puede usar Bootraps
- Puede usar MVC


-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

    <?php
    include 'Video__77_CRUD_IIII_conexion.php';

    $Id = $_GET["Id"];
    var_dump($Id);
    $base->query("DELETE FROM datos_usuarios WHERE Id='$Id'");
    header("Location:Video__77_CRUD_IIII_index.php");
    ?>
  </body>
</html>
