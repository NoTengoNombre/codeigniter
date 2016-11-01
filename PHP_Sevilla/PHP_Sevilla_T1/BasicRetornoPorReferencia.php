<!-- No Fear No Distractions -->
<!-- T.E.D , I.T.W.T -->

<?php
/**
 * * Official Guide .. : http://php.net/manual/es/index.php
 * * Guide Help........: http://www.cristalab.com/tutoriales/variables-por-referencia-y-valor-en-php-c64201l/
 * * Author............: RadWulf Candle
 * * Notes.............: 
 * * Last changed......:
 */

/**
 * @see función también puede retornar 
 * una referencia de una variable 
 * que tenga en su ámbito, para 
 * lograr esto el operador &, 
 * debe estar presente en el 
 * nombre de la función 
 * y en la asignación. 

 * @staticvar int $var
 * @return int
 */
function &unaFuncion() {
  static $var = 0;
  echo "var: ";
  var_dump($var);
  return $var;
}

/**
 * Nota: para que los desconocen 'static', 
 * en el ámbito de funciones hace que 
 * la variable se inicialice 
 * en la primera invocación 
 * de la función.
 */
$alias = & unaFuncion();

echo "alias: ";
var_dump($alias);
$alias++;

unaFuncion();
echo "alias: ";
echo $alias;
var_dump($alias);
?>







