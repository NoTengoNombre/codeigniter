<!--
    @Created on : 29-dic-2016, 19:07:00
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
//!! Ruta 1º archivo - modifico las rutas porque parten de la raiz
    require_once ("modelo/Personas_modelo.php"); // tengo includo todo el script del archivo Productos_view
// hemos creado un objeto Productos_modelo
    $persona = new Personas_modelo(); // estamos llamando al constructor
//    get_productos <- devuelve un array asociativo con todos los productos
    $matrizPersonas = $persona->get_personas();

//    Ruta 1º archivo
    require_once ("vista/Personas_view.php"); // tengo includo todo el script del archivo Productos_view
    ?>
  </body>
</html>
