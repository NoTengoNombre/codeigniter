<!--
    @Created on : 15-dic-2016, 9:54:41
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

      private $secuencia, $longSec;

      // Establece una secuencia inicial vacía de longitud 0
      public function resetSecuencia() {
        $this->longSec = 0;
        $this->secuencia = "";
        srand(time());
      }

      // Incrementa la secuencia inicial en un dígito aleatorio de 1 a 4
      public function incrementaSecuencia() {
        $n = rand(1, 4);
        $this->secuencia[$this->longSec] = $n;
        $this->longSec++;
      }

      // Devuelve la secuencia actual
      public function getSecuencia() {
        return $this->secuencia;
      }

      // Compara $secUser con $secuencia. Devuelve -1 si son distintas y 0 si son iguales
      public function comparaSecuencias($secUser) {
        $dif = 0;
        $i = 0;
        foreach ($this->secuencia as $valor) {
          if ($secUser[$i] != $valor) {
            $dif++;
            break;
          }
          $i++;
        }

        if ($dif == 0)
          return 0;
        else
          return -1;
      }

    }
    ?>
  </body>
</html>
