<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "- Forma antigua";
echo "<br>";

$array = array(
    "foo" => "bar",
    "bar" => "foo",);

// variable vertedero sirve para mostrar por pantall el valor
var_dump($array);

echo "- Forma nueva";

$array1 = array(
    "foo1" => "bar1",
    "bar1" => "foo1",);
// variable vertedero
var_dump($array1);

$array2 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
// variable vertedero
var_dump($array2);

$arrays_asociativos[1] = "1";
$arrays_asociativos[2] = "11";
$arrays_asociativos[3] = "111";
$arrays_asociativos[4] = "1111";
$arrays_asociativos[5] = "11111";
var_dump($arrays_asociativos);

echo "<br>";

$aa["ESP"] = "Espania";
$aa["FRA"] = "Francia";
$aa["POR"] = "Portugal";
var_dump($aa)
?>





















