<!--https://www.youtube.com/watch?v=E57R8gFnNlU-->
<?php
require_once 'conexion.php';
$nom = $_REQUEST["txtnom"];
//nombre de la foto que esamos subiendo
$foto = $_FILES["foto"]["name"];
//captura foto
$ruta = $_FILES["foto"]["tmp_name"];
$destino = "fotos/" . $foto;
copy($ruta, $destino);
mysql_query("insert into foto (nombre,foto) values('$nom','$destino')");
//header sirve para que despues de insertar se quede en la misma pagina
header("Location: index.php");
?>
