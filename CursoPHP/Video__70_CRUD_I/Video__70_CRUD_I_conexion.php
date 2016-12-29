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
    <style>

    </style>
  </head>
  <body>
    <?php
    try {

//      conexion
      $base = new PDO('mysql:host=localhost;dbname=x_pruebas', 'root', '');
//      atributos
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//      tipo codificacion
      $base->exec("SET CHARACTER SET UTF8");
    } catch (Exception $ex) {
      die("Error : " . $ex->getMessage() . " - " . $ex->getLine());
    }
    ?>
  </body>
</html>
