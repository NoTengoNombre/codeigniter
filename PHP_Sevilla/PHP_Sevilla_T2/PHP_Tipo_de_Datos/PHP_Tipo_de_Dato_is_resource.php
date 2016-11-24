<!--
    @Created on : 23-nov-2016, 21:15:48
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.types.resource.php
    @version    :
    @TODO       :Un valor tipo resource es una variable especial, que contiene una referencia a un recurso externo. Los recursos son creados y usados por funciones especiales. Vea el apéndice para un listado de todas estas funciones y los tipos resource correspondientes.
Dado que las variables resource contienen gestores especiales a archivos abiertos, conexiones con bases de datos, áreas de pintura de imágenes y cosas por el estilo, la conversión a tipo resource carece de sentido.

-->
<?php
$db_link = mysqli_connect("localhost", "root", "", "portal");
if (is_resource($db_link)) {
  echo "si";
} else {
  echo "no";
}
?>
