<!--
    @Created on : 22-oct-2016, 13:48:01
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

// MODELO : SIN BD
class Palindromo {

  public function comprobarPalindromo($texto_entrada) {
//  Falta eliminar espacios y tildes
    $texto_minuscula = strtolower($texto_entrada); // Elimina mayusculas
    $i_izq = 0; // Contador principio hasta el final
    $j_der = strlen($texto_minuscula) - 1; // Contador final hasta el principio
    $diferencias = 0; //Contador del nº de diferencias
//    Divide la cadena AND diferencias 0
    while (($i_izq < strlen($texto_minuscula) / 2) && ($diferencias == 0)) {
//            
      if ($texto_minuscula[$i_izq] != $texto_entrada[$j_der]) {
        $diferencias++;
      }
      $i_izq++;
      $j_der--;
    }
    return $diferencias;
  }

}
?>
