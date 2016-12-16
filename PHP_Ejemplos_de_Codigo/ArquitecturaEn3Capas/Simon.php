<!--
    @Created on : 14-dic-2016, 23:37:27
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

    class Simon {

//      Almacenar 2 variables
      private $secuencia;
      private $longitudSecuencia;

      public function resetSecuencia() {
        $this->longitudSecuencia = 0;
        $this->secuencia = "";
        srand(time()); // semilla que genera un numero aleatorio
      }

      public function incrementaSecuencia() {
        $n = rand(1, 4);
        $this->secuencia[$this->longitudSecuencia] = $n;
        $this->longitudSecuencia++;
      }

      public function getSecuencia() {
        return $this->secuencia;
      }

//      Compara $secUser con $secuencia. Devuelve -1 si son distintas y 0 si son iguales
      public function comparaSecuencias($secUser) {
        $diff = 0;
        $i = 0;
        foreach ($this->secuencia as $valor) {
          if ($secUser[$i] != $valor) {
            $diff++;
            break;
          }
          $i++;
        }
        if ($diff == 0) {
          return 0;
        } else {
          return -1;
        }
      }

    }

    // fin de la clase
    ?>
  </body>
</html>
