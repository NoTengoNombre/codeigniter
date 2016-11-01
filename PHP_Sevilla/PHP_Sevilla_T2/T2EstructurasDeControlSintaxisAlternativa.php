<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 5;
$b = 5;

$m = $a . " <br> igual  " . $b . "<br>";
echo $m . " encadena a " . $a . " <br> ";

if ($a == 5):
  echo "a igual 5";
  echo "...";
elseif ($a == 6):
  echo "a igual 6";
  echo "!!!";
else:
  echo "a no es 5 ni 6 ";
endif;
?> 
