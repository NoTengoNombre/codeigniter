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
        mysql_connect($host, $usr, $pass);
        mysql_select_db($dbname);
      }

      public function desconectarDB() {
        mysql_close();
      }

      public function ejecutaQuery($sql) {
        $res = mysql_query($sql);
        return $res;
      }

      public function fetchCursor($cursor) {
        $tupla = mysql_fetch_array($cursor);
        return $tupla;
      }

    }
    ?>
  </body>
</html>
