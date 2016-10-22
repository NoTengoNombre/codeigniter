<!--
    @Created on : 22-oct-2016, 16:50:54
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class T2Primo {

  /**
   * Comprueba si $n es primo o no 
   * @param type $n
   * @return boolean 
   */
  private function esPrimo($n) {
    $sw = true;
    for ($i = 3; ($i < $n / 2) && ($sw == true); $i = $i + 2) {
      if ($n % $i == 0) {
        $sw = false;
      }
      return $sw;
    }
  }

  /**
   * Construye una lista de numeros primos desde 1 hasta $limite
   * 
   * @param type $limite
   * @return type Lista de Array
   */
  public function listaPrimos($limite) {
    $lista = Array();
    $lista[0] = 1; // el numero 1 es primo
    $lista[1] = 2; // el numero 2 es primo

    for ($i = 3; $i <= $limite; $i = $i + 2) {
      if ($this->esPrimo($i)) {
        $lista[] = $i; // Almacenamos $i en la lista de primos
      }
    }
    return $lista;
  }

}
?>
