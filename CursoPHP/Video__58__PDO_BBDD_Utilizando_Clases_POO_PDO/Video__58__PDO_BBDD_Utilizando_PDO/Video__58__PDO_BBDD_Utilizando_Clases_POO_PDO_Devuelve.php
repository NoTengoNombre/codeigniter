<!--
    @Created on : 25-dic-2016, 23:02:15
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Utilizar PDO y POO
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'Video__58__PDO_BBDD_Utilizando_Clases_POO_PDO_Conexion.php';

//    Conectas  y buscas
    class DevuelveProductos extends Conexion {

      /**
       * Llamada al constructor padre 
       * para que ejecute todos los objetos que hereda
       */
      public function __construct() {
        parent::__construct();
      }

      /**
       * 
       * @param type $dato
       * @return type arrays Objetos productos
       */
      public function get_productos($dato) {
        $resultado = $this->conexion_db->query('SELECT * FROM productos WHERE G="' . $dato . '" ');
//        $resultado = $this->conexion_db->query("SELECT * FROM productos WHERE G='$dato';");
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
      }

    }
    ?>
  </body>
</html>














