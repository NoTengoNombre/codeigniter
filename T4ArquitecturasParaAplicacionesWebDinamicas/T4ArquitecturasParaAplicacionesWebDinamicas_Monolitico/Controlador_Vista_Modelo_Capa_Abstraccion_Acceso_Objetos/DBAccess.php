<!--
    @Created on : 15-dic-2016, 22:37:07
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Modelo_Acceso_a_Datos_Objetos
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

      public function DBAccess() {
        $this->dbAbstract = new DBAbstract();
      }

      public function getUsuarios() {
        $this->dbAbstract->crearConexion('localhost', 'root', '', 'portal2');
        $resultado = $this->dbAbstract->consulta("SELECT id_usuario , nombre_usuario FROM usuarios", 'db');
        $usuarios = array();
        while ($todos_usuario = $this->dbAbstract->getResultado($resultado)) {
          $usuarios[] = $todos_usuario;
        }
        $this->dbAbstract->cerrarConexion();
        return $usuarios;
      }

    }
    ?>
  </body>
</html>
