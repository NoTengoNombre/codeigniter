<!--
    @Created on : 25-dic-2016, 21:51:13
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Existen 2 formas de programacion de BBDD en PHP

A - procedimental 
           1 - mysqli 
           2 - PDO

B - Poo

Archivo de conexion - PHP 

POO Modularizacion : 
    1-Dividir el codigo en partes o archivos
    2-Sirve para localizar facilmente los errores
    3-Reutilizacion del codigo
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'Video__57__PDO_BBDD_Utilizando_Clases_config.php';

    /**
     * Archivo , Clase Conexion
     */
    class Conexion {

      protected $conexion_db;

      //    Constructor
      public function __construct() {
        //        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
        if ($this->conexion_db->connect_errno) {
          echo "Fallo al conectar al Mysql : " . $this->conexion_db->connect_error;
          return;
        }
        $this->conexion_db->set_charset(DB_CHARSET);
      }

    }
    ?>
  </body>
</html>
