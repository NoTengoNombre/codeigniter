<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 1;
$i = rand(3, 4);
$ii = rand(1, 5);

echo "<br> ---------";

while ($i <= 10) {
  echo $i++;
}
echo "<br> ---------";

while ($a <= 11) {
  echo "<br> " . $a++;
}

echo "<br> ---------";

$j = 1;
while ($j <= 10):
  echo " " . $j++;
endwhile;
?>