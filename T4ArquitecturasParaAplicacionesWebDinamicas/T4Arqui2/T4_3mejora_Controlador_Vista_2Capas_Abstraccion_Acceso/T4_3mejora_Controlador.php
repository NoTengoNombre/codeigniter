<!--
    @Created on : 07-ene-2017, 12:58:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Controlador</title>
  </head>
  <body>
    <?php
    include('T4_3mejora_capa_Acceso_a_datos.php');

    $datos = Paises2::getAllPaises();
// este metodo devuelve un array

    require ("T4_3mejora_Vista.php");
    ?>
  </body>
</html>










