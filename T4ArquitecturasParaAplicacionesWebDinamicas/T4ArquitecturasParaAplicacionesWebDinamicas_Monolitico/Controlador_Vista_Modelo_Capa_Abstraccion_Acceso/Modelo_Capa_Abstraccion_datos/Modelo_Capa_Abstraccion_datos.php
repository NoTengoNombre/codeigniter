<!--
    @Created on : 15-dic-2016, 22:33:37
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

    /**
     * Creo la conexion bd
     * 
     * @param type $servidor
     * @param type $usuario
     * @param type $clave
     * @param type $database
     * @return \mysqli
     */
    function crearConexion($servidor, $usuario, $clave, $database) {
      $db = new mysqli($servidor, $usuario, $clave, $database);
      return $db;
    }

    /**
     * Cierro conexion 
     * 
     * @param type $db
     */
    function cerrarConexion($db) {
      $db->close();
    }

    /**
     * Consulta general
     * 
     * @param type $consulta
     * @param type $db
     * @return type
     */
    function consulta($consulta, $db) {
      return $db->query($consulta);
    }

    /**
     * Consulta fila 
     * 
     * @param type $result
     * @return type
     */
    function getTupla($result) {
      return $result->fetch_array();
    }
    ?>
  </body>
</html>
