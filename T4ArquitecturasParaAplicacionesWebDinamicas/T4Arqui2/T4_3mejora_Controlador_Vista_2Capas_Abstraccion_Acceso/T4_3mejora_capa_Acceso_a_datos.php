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
    <title>Modelo acceso a datos</title>
  </head>
  <body>
    <?php
    include("T4_3mejora_capa_Abstraccion.php");

    class Paises2 { //modelo

      public function getAllPaises() {
        $db = new DbAbstract(); // invoca objeto DbAbstract para invocar sus metodos
        $db->crearConexion("localhost", "root", "", "world2"); // creo la conexion
        $resultados = $db->consulta("SELECT ID , Name FROM city"); // creo la consulta
        $db->cerrarConexion(); // cierro la bd
        return $resultados;
      }

    }
    ?>
  </body>
</html>
