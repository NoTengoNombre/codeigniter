<!--
    @Created on : 07-ene-2017, 12:58:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 

Abstracción (informática), 
aislar un elemento de su 
contexto o del resto de los elementos que lo acompañan.

Capa de abstracción, 
manera de ocultar los detalles de 
implementación de ciertas funcionalidades

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
     * Crear conexion - Varias copias para cada objeto conexion
     */
    class DbAbstract {

      private $db; //objeto

      /**
       * Crea un objeto con la conexion a la bd
       * 
       * @param type $servidor
       * @param type $usuario
       * @param type $clave
       * @param type $dbname
       */

      function crearConexion($servidor, $usuario, $clave, $dbname) {
        $this->db = new mysqli($servidor, $usuario, $clave, $dbname);
      }

      /**
       * Cierra la bd
       */
      function cerrarConexion() {
        if ($this->db) {
          $this->db->close();
        }
      }

      /**
       * Ejecuta la consulta
       * 
       * @param type $parametros_consulta
       * @return type array - resultset
       */
      function consulta($parametros_consulta) { //metodo
        // objeto con otro metodo con parametros
        $res = $this->db->query($parametros_consulta); // devuelve true/false u objeto o null
        $resArray = array(); // crea una array
        if ($res) { // tiene valores
          $resArray = $res->fetch_all(); // trae un array asociativo o numeral
        }
        return $resArray; // devuelve resultset
      }

    }
    ?>
  </body>
</html>
