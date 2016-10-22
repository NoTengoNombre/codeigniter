<!--
    @Created on : 22-oct-2016, 19:54:31
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : El servidor "pensará" un número al azar entre 1 y 100 (puede cambiarse el límite para facilitar o dificultar el juego). 
El usuario tratará de adivinarlo escribiéndolo en un cuadro de texto, y el servidor le responderá diciendo "Mi número es mayor" o "Mi número es menor", hasta que el jugador acierte. Entonces el servidor le informará del número de intentos que ha necesitado para adivinar el número.
-->

<?php

//MODELO

class T2NumSecreto {

  private $numSecreto;

  /**
   * Utiliza el atributo de la clase para generar un numero aleatorio
   */
  public function elegirNuevoNumSecreto() {
    srand(time());
    $this->numSecreto = rand(1, 10);
  }

  /**
   * Compara $numero con $numSecreto
   * Devuelve -1 si $numero es menor 
   * Devuelve 0 si son iguales 
   * Devuelve 1 si $numero es mayor
   * @param type $numero
   */
  public function comparar($numero) {
    echo "Comparando $numero con numero_secreto = $this->numSecreto<br>";
    if ($numero > $this->numSecreto) {
      $res = 1;
    }
    if ($numero < $this->numSecreto) {
      $res = -1;
    }
    if ($numero == $this->numSecreto) {
      $res = 0;
    }
    return $res;
  }

}
