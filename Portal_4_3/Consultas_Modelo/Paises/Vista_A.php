<!-- ver Vistas -->

<?php

class Vista {

  public static function show_A($vistas) {
    foreach ($vistas as $vista) {
      echo '<br>';
      echo $vista[0] . " - " . $vista[1] . " - " . $vista[2];
    }
  }

}
