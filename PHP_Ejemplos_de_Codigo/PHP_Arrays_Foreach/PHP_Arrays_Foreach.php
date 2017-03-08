<!--
    @Created on : 16-ene-2017, 21:44:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$rows = array(
    array(
        'nombre' => 'Antonio1', 'apellidos' => 'Gomez Gomez1', 'Telefono' => '111111'),
    array(
        'nombre' => 'Antonio2', 'apellidos' => 'Gomez Gomez2', 'Telefono' => '111111'),
    array(
        'nombre' => 'Antonio3', 'apellidos' => 'Gomez Gomez3', 'Telefono' => '111111'),
    array(
        'nombre' => 'Antonio4', 'apellidos' => 'Gomez Gomez4', 'Telefono' => '111111'),
);

foreach ($rows as $valor) {
  echo "Nombre : " . $valor['nombre'] . '<br>' . $valor['apellidos'] . '<br>' . $valor['Telefono'] . '<br>';
}