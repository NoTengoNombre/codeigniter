<!--
    @Created on : 15-dic-2016, 21:52:19
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
    include './Vista.php';
    include './DBAccess.php';

    class Controlador {

      public $dbAccess;
      public $vista;

      public function __construct() {
        $this->dbAccess = new DBAccess();
        $this->vista = new Vista();
      }

      public function listarUsuarios() {
        $usuarios = $this->dbAccess->getUsuarios();
        $this->vista->render("ListarUsuarios", $usuarios);
      }

    }

    ?>
  </body>
</html>



