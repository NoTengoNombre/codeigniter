<!--
    @Created on : 15-ene-2017, 14:55:03
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.jveweb.net/archivo/2011/07/sentencias-preparadas-de-mysql-en-php-ejemplos-orientados-a-objetos.html
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_errno) {
  die("Error en la conexion : ") . $mysqli->connect_error;
}

$peticion = "SELECT * FROM city ORDER BY ID ASC LIMIT 10";

//$result - objeto tipo mysqli_result
//Cuando las peticiones nos regresan información crean un nuevo objeto de clase mysqli_result. 
////////// devuelve un objeto de la clase mysqli_result
$resultado = $mysqli->query($peticion);
//tenemos el nuevo objeto recuperamos la informacion utilizando los metodos
//
//fetch_array(); , fetch_assoc() , fetch_row(); del objeto mysqli_result
//
//obtenemos el 1º elemento de la tabla y nos dara un array con todos los valores
// SI LA tabla contiene 1 fila , cada vez que LLAMAMOS A UNO de ESTOS METODOS
//obtendremos la siguiente FILA disponible en la TABLA RESULTANTE
//
//NECESITAMOS LLAMARLO HASTA QUE HAYAMOS RECUPERADO CADA ELEMENTO DE LA TABLA
//$resultado->fetch_array(MYSQLI_NUM);
//var_dump($resultado);
//
//$resultado->fetch_array(MYSQLI_ASSOC);
//var_dump($resultado);

$resultado->fetch_array(MYSQLI_BOTH);
//nos daría un arreglo con 8 elementos, que tendría ambos
//arreglos para que nosotros usemos lo que deseamos, 
//este es el comportamiento predeterminado.
//var_dump($resultado);
//$resultado->fetch_row(); asociaría el número de la columna con el arreglo


$mysqli->close();
?>
