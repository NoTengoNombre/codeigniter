<!--
    @Created on : 15-dic-2016, 10:10:59
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

    class DBAbstraccion {

      public function conectarDB($host, $usr, $pass, $dbname) {
        mysqli_connect($host, $usr, $pass);
        mysqli_select_db($dbname);
      }

      public function desconectarDB() {
        mysqli_close();
      }

      public function ejecutaQuery($sql) {
        $res = mysqli_query($sql);
        return $res;
      }

      public function fetchCursor($cursor) {
        $tupla = mysqli_fetch_array($cursor);
        return $tupla;
      }

    }
    ?>
  </body>
</html>
