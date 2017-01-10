<!--
    @Created on : 07-ene-2017, 1:23:54
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Static</title>
  </head>
  <body>
    <?php

    class Beer {

      const NAME = "Beer!";

      public static function printed() {
        echo "static Beer:NAME = " . static::NAME . PHP_EOL;
      }

    }

    class Ale extends Beer {

      const NAME = 'Ale';

      public static function printed() {
        forward_static_call(array('parent', 'printed'));
        call_user_func(array('parent', 'printed'));

        forward_static_call(array('Beer', 'printed'));
        call_user_func(array('Beer', 'printed'));
      }

    }

    Ale::printed();
    echo '</pre>';
    ?>
  </body>
</html>
