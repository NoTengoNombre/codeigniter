<?php

//Ejemplo aprenderaprogramar.com
$diametro = $_REQUEST['diam'];
$altura = $_REQUEST['altu'];
$radio = $diametro / 2;
$Pi = 3.141593;
$volumen = $Pi * $radio * $radio * $altura;
echo "<br/>  El volumen del cilindro es de " . $volumen . " metros cubicos";
?>