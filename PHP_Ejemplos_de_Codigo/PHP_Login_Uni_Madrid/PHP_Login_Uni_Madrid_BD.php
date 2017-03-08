<!--
    @Created on : 21-dic-2016, 1:13:02
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

    class conectaBD {

      private $db = null;

      public function conectaBD() {
        $this->db = new mysqli('localhost', 'root', '', 'world2');
      }

      public function limpia_sql($texto) {
        if (get_magic_quotes_gpc()) {
          $texto = stripslashes($texto); // quita las barras y los string
        }
        if (!is_numeric($texto)) { // quita las sentenciasde escape peligrosas
          $texto = "'" . mysqli_real_escape_string($texto);
        }
        return $texto;
      }

    }
    ?>
  </body>
</html>
