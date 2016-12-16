<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$arrays_asociativos = 5;
$b = 5;

$m = $arrays_asociativos . " <br> igual  " . $b . "<br>";
echo $m . " encadena a " . $arrays_asociativos . " <br> ";

if ($arrays_asociativos == 5):
  echo "a igual 5";
  echo "...";
elseif ($arrays_asociativos == 6):
  echo "a igual 6";
  echo "!!!";
else:
  echo "a no es 5 ni 6 ";
endif;
?> 
