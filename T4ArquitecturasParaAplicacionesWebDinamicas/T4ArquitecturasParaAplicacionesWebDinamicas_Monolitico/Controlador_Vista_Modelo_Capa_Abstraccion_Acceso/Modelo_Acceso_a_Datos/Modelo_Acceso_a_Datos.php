<!--
    @Created on : 15-dic-2016, 22:37:07
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Creacion de conexion</title>
  </head>
  <body>
    <?php
    include '../Modelo_Capa_Abstraccion_datos/Modelo_Capa_Abstraccion_datos.php';

    function getUsuarios() {
      $db = crearConexion('localhost', 'root', '', 'portal2');
      $resultado = consulta("SELECT id_usuario , nombre_usuario FROM usuarios", $db);

      $usuarios = array();

      while ($todos_usuario = getUsuarios($resultado)) {
        $usuarios[] = $todos_usuario;
      }
      cerrarConexion($db);

      return $usuarios;
    }
    ?>
  </body>
</html>
