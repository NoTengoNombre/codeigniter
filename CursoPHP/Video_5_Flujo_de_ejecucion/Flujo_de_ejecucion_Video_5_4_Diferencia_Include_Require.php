<!--
    @Created on : 19-dic-2016, 17:39:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        : https://www.youtube.com/watch?v=MhaqZ_CY32A&index=5&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_
    @version    :
    @TODO       :
-->

<?php
echo "Este mensaje esta en el 3º script<br>";

echo "<b>1º flujo de ejecucion</b>";

// Al no estar este 'script' dara un error en la linea donde esta el 'include' pero continuara el programa
//include 'no_existe_este_script';
//Al no estar este 'script' dara un error , DETIENE el flujo de ejecucion , no continua con el codigo que hay debajo
require 'eded';

echo "<b>2º flujo de ejecucion</b>";

dameDatos();
