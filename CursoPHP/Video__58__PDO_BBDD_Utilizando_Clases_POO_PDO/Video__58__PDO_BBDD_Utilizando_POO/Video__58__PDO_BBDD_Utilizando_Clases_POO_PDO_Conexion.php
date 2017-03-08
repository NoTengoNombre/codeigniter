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

    class Conexion {

      protected $conexion_db;

      public function __construct() {
        $this->conexion_db = new mysqli("localhost", "root", "", "x_pruebas");
        if ($this->conexion_db->connect_errno) {
          echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_error;
          return;
        }
        $this->conexion_db->set_charset("utf8");
      }

    }
    ?>
  </body>
</html>














