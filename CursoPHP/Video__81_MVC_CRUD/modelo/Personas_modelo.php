<!--
    @Created on : 29-dic-2016, 19:05:57
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

    class Personas_modelo {

//    encapsulacion 
      private $db; //almaceno la conexion - interactura con la conexion
      private $personas; //  Es un ARRAY ASOCIATIVO<-- almaceno los productos -

      public function __construct() {
//      Crea una conexion a la bd 
        require_once ("modelo/Conectar.php"); // Puede que tenga que modificar esta ruta
//        especificar la variable donde quiero almacenar la conexion
//                            metodo static
        $this->db = Conectar::conexion();
        $this->personas = array(); // Esto se ha convertido en un ARRAY
      }

      /**
       * Cuando invoque este metodo 
       * devuelve todos los productos de la tabla bd
       * @return type ARRAY ASOCIATIVO
       */
      public function get_personas() {
//      Tengo dentro de un array todos los productos
//        $consulta <- Es un Array
        $consulta = $this->db->query("SELECT * FROM datos_usuarios");
// while : Recorre las filas que tiene el array 'consulta'
//        A cada vuelta de bucle se almacena dentro de filas cada registro del array productos
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
//          • Pasar el array "consultas" al array "productos"
          $this->personas[] = $filas; // almacenar cada registro en el arrays productos
        }
//       Devuelveme el Array Asociativo - Productos - con todos los productos
        return $this->personas;
      }

    }
    ?>
  </body>
</html>
