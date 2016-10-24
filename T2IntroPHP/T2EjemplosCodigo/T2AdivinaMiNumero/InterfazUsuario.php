<!--
    @Created on : 22-oct-2016, 19:54:31
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : El servidor "pensará" un número al azar entre 1 y 100 (puede cambiarse el límite para facilitar o dificultar el juego). 
El usuario tratará de adivinarlo escribiéndolo en un cuadro de texto, y el servidor le responderá diciendo "Mi número es mayor" o "Mi número es menor", hasta que el jugador acierte. Entonces el servidor le informará del número de intentos que ha necesitado para adivinar el número.
-->

<?php

class InterfazUsuario {

  /**
   * 
   */
  public function mostrarFormulario() {
    echo "<form method='get' action='index.php'>Introduce un numero : ";
    echo "<input type='text' name='numero' size='5' />";
    echo "<br>";
    echo "<input type='submit' value='Comprobar' />";
    echo "</form>";
  }

  /**
   * 
   * @param type $res
   */
  public function mostrarResultado($res) {
    if ($res == -1) {
      echo "Mi numero es <h3>Mayor</h3><br>";
      echo "<a href='index.php'>Volver a intentarlo</a>";
    }
    if ($res == 1) {
      echo "Mi numero es <h3>Menor</h3><br>";
      echo "<a href='index.php'>Volver a intentarlo</a>";
    }
    if ($res == 0) {
      echo "Mi numero es <h1>Acertado</h1><br>";
    }
  }

}
