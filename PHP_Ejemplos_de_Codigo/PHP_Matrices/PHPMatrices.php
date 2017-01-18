<!--
    @Created on : 17-ene-2017, 0:25:13
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$arr = array(
    array(
        1 => "a1",
        2 => "a2",
        3 => "a3",
        4 => "a4"
    )
);

foreach ($arr[0] as $value) {
  echo $value;
  echo '<br>';
}

$arr1 = array(
    array("1", "2", "3"),
    array("1a", "2a", "3a"),
    array("1b", "2b", "3b")
);

echo '<br>';
foreach ($arr1 as $fila) {
  foreach ($fila as $columna) {
    echo ' ' . $columna;
  }
  echo '<br>';
}


$people = array(
    array('name' => 'Kalle', 'salt' => 1111),
    array('name' => 'Pierre', 'salt' => 2222));

for ($i = 0, $size = count($people); $i < $size; ++$i) {
  echo $people[$i]['salt'] = mt_rand(00000, 999999);
}
