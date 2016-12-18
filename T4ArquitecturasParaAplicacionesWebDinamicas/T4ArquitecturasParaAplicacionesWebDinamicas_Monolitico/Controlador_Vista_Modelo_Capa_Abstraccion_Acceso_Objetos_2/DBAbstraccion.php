<!--
    @Created on : 15-dic-2016, 22:33:37
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Modelo_Capa_Abstraccion_datos_Objetos - TODAS LAS CONEXIONES
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class DBAbstract {

      private $db = null;

      /**
       * Creo la conexion bd
       * 
       * @param type $servidor
       * @param type $usuario
       * @param type $clave
       * @param type $database
       * @return \mysqli
       */
      public function crearConexion($servidor, $usuario, $clave, $database) {
        $this->db = new mysqli($servidor, $usuario, $clave, $database);
//        return $db;
      }

      /**
       * Cierro conexion 
       * 
       * @param type $db
       */
      public function cerrarConexion() {
        $this->db->close();
      }

      /**
       * Consulta general
       * 
       * @param type $consulta
       * @param type $db
       * @return type
       */
      public function consulta($consulta) {
        return $this->db->query($consulta);
      }

      /**
       * Consulta fila 
       * 
       * @param type $result
       * @return type
       */
      function getResultado($resultado) {
        return $resultado->fetch_array();
      }

    }
    ?>
  </body>
</html>
