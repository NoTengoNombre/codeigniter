<!--
    @Created on : 23-nov-2016, 21:52:50
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Devuelve una cadena formateada según el formato dado usando el parámetro 
de tipo integer timestamp dado o el momento actual si no se da una marca de tiempo. 
En otras palabras, timestamp es opcional y por defecto es el valor de time().

offset - designar inequívocamente una dirección de memoria conjuntamente con un segmento en algunas arquitecturas de microprocesadores.
-->

<?php
$hoy = getdate();
echo is_array($hoy) ? '<p style="color:red;background-color:black;"> Array </p><br>' : "No es un array";

$var = gettype($hoy);

echo $var;

if (is_array($var)) {
  echo '<br> Es un array ';
} else {
  echo '<br> No es un array <h3>' . gettype($var) . '</h3>';
}


echo is_array($var) ? 'Array <br> ' : '<br> No es un array';
echo "\n";

