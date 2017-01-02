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

    class Productos_modelo {

//    encapsulacion 
      private $db; //almaceno la conexion - interactura con la conexion
      private $productos; // almaceno los productos - Es un ARRAY

      public function __construct() {

        require_once 'Conectar.php'; // Puede que tenga que modificar esta ruta
//        especificar la variable donde quiero almacenar la conexion
        $this->db = Conectar::conexion();
        $this->productos = array(); // Esto se ha convertido en un ARRAY
      }

      public function get_productos() {
//      Tengo dentro de un array todos los productos
//        $consulta <- Es un Array
        $consulta = $this->db->query("SELECT * FROM productos");
// while : Recorre las filas que tiene el array 'consulta'
//        A cada vuelta de bucle se almacena dentro de filas cada registro del array productos
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
//          pasar el array "consultas" al array "productos"
          $this->productos[] = $filas; // almacenar cada registro en el arrays productos
        }
//       Devuelveme el array productos - con todos los productos
        return $this->productos;
      }

    }
    ?>
  </body>
</html>
