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
    include 'conexion.php';

    $Id = $_GET["Id"];
    $base->query("DELETE FROM datos_usuarios WHERE ID='$Id'");
    header("Location:index.php");
    ?>
  </body>
</html>
















