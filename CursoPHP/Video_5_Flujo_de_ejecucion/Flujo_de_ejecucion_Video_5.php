<!--
    @Created on : 19-dic-2016, 17:39:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        : https://www.youtube.com/watch?v=MhaqZ_CY32A&index=5&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_
    @version    :
    @TODO       :
-->

<?php
//Flujo de ejecucion de Arriba a Abajo


//1º Instruccion
echo "Este es el primer mensaje<br>";
//2º Instruccion
echo '<br>';

/**
 * Estructuras que rompen el flujo de ejecucion del programa
 * Funcion : No es ejecuto el codigo hasta que no es llamada la funcion.
 */
function dameDatos() {

  echo "Este es el mensaje interior de la funcion <br>";
}

//3º Instruccion
// LLAMAR A LA FUNCION desde donde quiera , retornara arriba y seguira hacia abajo
dameDatos(); // si movemos la instruccion , hasta el final , el flujo de ejecucion cambiara

//4º Instruccion
echo "Este es el segundo mensaje<br>";
//5º Instruccion
echo '<br>';

//6º Instruccion
echo "Instrucciones que interrumpen el flujo natural de ejecución";
//7º Instruccion
echo '<br>';

//8º Instruccion
echo "Instrucciones como condicionales , bucles , funciones";

//Cambiar el flujo de ejecucion sirve para repetir la misma tarea 'x' veces

// Crear una funcion de conversion - cada vez que necesite la conversion en el programa
// solamente tengo que llamar a la funcion

// Puedo tener varios bloques , en un bloque tengo la funcion y en otra el codigo