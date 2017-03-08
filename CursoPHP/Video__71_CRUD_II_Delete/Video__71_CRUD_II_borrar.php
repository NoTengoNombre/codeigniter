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
    include 'Video__71_CRUD_II_conexion.php';

//  Nombre de la variable y Nombre de la URL
//    Almacena en la variable lo que le estamos pasando por la url
    $Id = $_GET["Id"];
    var_dump($Id);
//  Uso objeto $base el cual almacena una consulta eliminando el registro
    $base->query("DELETE FROM datos_usuarios WHERE Id='$Id'");
//    Redirigir a la pagina Index - pagina que hemos partido  
    header("Location:Video__71_CRUD_II_index.php");
    ?>
  </body>
</html>
