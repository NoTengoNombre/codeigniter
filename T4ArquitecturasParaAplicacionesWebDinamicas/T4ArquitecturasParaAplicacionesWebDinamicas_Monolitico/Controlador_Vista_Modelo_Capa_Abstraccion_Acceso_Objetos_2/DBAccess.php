<!--
    @Created on : 15-dic-2016, 22:37:07
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Modelo_Acceso_a_Datos_Objetos - TODAS LAS CONSULTAS
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Creacion de conexion</title>
  </head>
  <body>
    <?php
    include './DBAbstraccion.php';

    class DBAccess {

      private $dbAbstract;

      /**
       * Crea un objeto tipo dbAbstract
       */
      public function DBAccess() {
        $this->dbAbstract = new DBAbstract();
      }

      public function getUsuarios() {
//      Este objeto dbAbstract crea la conexion
        $this->dbAbstract->crearConexion('localhost', 'root', '', 'portal2');  // llama a la clase Abstracta
        $resultado = $this->dbAbstract->consulta("SELECT id_usuario , nombre_usuario FROM usuarios", 'db');
//      Creamos un array para almacenar los resultados
        $usuarios = array();
//      Sacamos los resultados y lo guardamos dentro de una array  
        while ($todos_usuario = $this->dbAbstract->getResultado($resultado)) {
          $usuarios[] = $todos_usuario;
        }
//      Llamamos al objeto dbAbstract y cerramos la conexion
        $this->dbAbstract->cerrarConexion();
//      Devuelve el total de usuarios 
        return $usuarios;
      }

    }
    ?>
  </body>
</html>
