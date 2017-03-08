<!--
    @Created on : 24-nov-2016, 22:08:47
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Caja {

  var $alto;
  var $ancho;
  var $largo;
  var $contenido;
  var $color;

  function __construct($alto = 1, $ancho = 1, $largo = 1, $contenido = 1, $color = 1) {
    $this->alto = $alto;
    $this->ancho = $ancho;
    $this->largo = $largo;
    $color->color = $color;
    $contenido->contenido = "";
  }

//  set
  function introduce($cosa) {
    $this->contenido = $cosa;
  }

//  set
  function muestra_contenido() {
    echo $this->contenido;
  }

}

$micaja = new Caja();
echo '<br>' . gettype($micaja);
echo '<br>' . gettype($micaja->alto);
echo '<br>' . gettype($micaja->ancho);
echo '<br>' . gettype($micaja->color);
echo '<br>' . gettype($micaja->contenido);
echo '<br>' . gettype($micaja->largo);
echo '<hr>';

// Aunque se referencie a contenido - acepta alto
//$micaja->introduce($micaja->alto = 2);
$micaja->introduce($micaja->alto = 2);
$micaja->introduce($micaja->contenido = 2);
$micaja->muestra_contenido();

echo '<hr>';
echo gettype($micaja->alto);
echo '<hr>';
echo gettype($micaja->contenido);
?>