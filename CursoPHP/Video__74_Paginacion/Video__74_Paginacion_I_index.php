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
//    Intenta
    try {
//      conexion
      $base = new PDO("mysql:host=localhost; dbname=pruebas1", "root", "");
//      atributos
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//      codificacion
      $base->exec("SET CHARACTER SET utf8");
//      consulta
//      El 1º registro tiene la posicion 0
      $sql_total = "SELECT nombrearticulo , seccion , precio , paisdeorigen FROM productos WHERE seccion='deportes' LIMIT 0 , 3";
//      prepara consulta
      $resultado = $base->prepare($sql_total);
//      almacena consulta
      $resultado->execute(array());
//      recorre la consulta por array asociativo -> nombre de los campos
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo
        "Nombre Articulo: " . $registro["nombrearticulo"] .
        "<br>Seccion: " . $registro["seccion"] .
        "<br>Precio: " . $registro["precio"] .
        "<br>Pais : " . $registro["paisdeorigen"] . '<br><hr>';
      }
//      muetra posibles errores
    } catch (Exception $ex) {
      die("Error " . $ex->getMessage() . " - Linea de Error : " . $ex->getLine());
    }
    ?>
  </body>
</html>
