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
//  Es como si hubiera escrito todas las lineas anteriores y las tuviera aqui debajo 
    require 'Video__57__PDO_BBDD_Utilizando_Clases.php';

//    Con extends tengo definido todas las variables y metodos de la clase Padre Conexion
//    2º Gracia a la herencia podemos utilizar la variable conexion_db heredado de la clase PADRE
    class DevuelveProductos extends Conexion {

      /**
       * Tenemos una Jerarquia de herencia 
       * Conexion
       * 
       * DevuelveProductos --> llama al constructor de la clase Padre mediante parent
       */
      public function __construct() {
//        Conectamos a la base de datos con el constructor de Conexion
        parent::__construct(); // cuando el programa llegue a esta linea llamara al constructor del padre
//        parent::Conexion(); // cuando el programa llegue a esta linea llamara al constructor del padre
      }

//      metodo hace consulta sql y devuelve un array
      public function get_productos() {
//       Consulta SQL 
        $resultado = $this->conexion_db->query("SELECT * FROM productos");
//       Se añade el objeto SQL a un array asociativo
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
//       Devuelve un array
        return $productos;
      }

    }
    ?>
  </body>
</html>
