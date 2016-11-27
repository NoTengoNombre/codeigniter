<!--
    @Created on : 28-nov-2016, 0:14:01
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

    class ClaseSencilla {

// Declaraciones de propiedades inválidas:
//    public $var4 = self::metodo_static_Basico();
//    public $var5 = $myVar;
//    
// Funciona a partir de PHP 5.3.0
      const miCONSTANTE = "HF";

      // Válido a partir de PHP 5.6.0:
      public $var1 = 'hola ' . 'mundo';
      // Válido a partir de PHP 5.3.0:
      public $var2 = <<<EOD
hola mundo
EOD;
      // Válido a partir de PHP 5.6.0:
      public $var3 = 1 + 2;
      // Declaraciones de propiedades válidas:
      public $var6 = miCONSTANTE;
      public $var7 = array(true, false);
      // Válido a partir de PHP 5.3.0:
      public $var8 = <<<'EOD'
 hola mundo
EOD;

      public static function metodo_static_Basico() {
        echo "metodo_static_Basico";
      }

    }
    ?>
  </body>
</html>
