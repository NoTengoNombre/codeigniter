<!--
    @Created on : 14-ene-2017, 1:28:56
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

function intercambiar_elementos(&$vector, $pos1, $pos2) {
  $aux = $vector[$pos1];
  $vector[$pos1] = $vector[$pos2];
  $vector[$pos2] = $aux;
}

function posicion_menor_elemento($vector, $posinicial) {
  $posmenor = $posinicial;
  for ($i = $posinicial + 1; $i < count($vector); $i++) {
    if ($vector[$i] < $vector[$posmenor]) {
      $posmenor = $i;
    }
  }
  return $posmenor;
}

function ordenamiento_por_seleccion(&$vector) {
  for ($i = 0; $i < count($vector); $i++) {
    $posmenor = posicion_menor_elemento($vector, $i);
    if ($posmenor > $i) {
      intercambiar_elementos($vector, $i, $posmenor);
    }
  }
}
?>
