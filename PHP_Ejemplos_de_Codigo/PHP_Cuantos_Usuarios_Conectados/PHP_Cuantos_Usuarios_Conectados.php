<!--
    @Created on : 24-dic-2016, 16:07:39
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
Script PHP muy simple que indica cuantos usuarios hay activos online...
Hay que probarlo desde distintas ubicaciones (IP's) simultáneamente.

Se puede colocar en cualquier página Php utilizando, por ejemplo: <? php include("users.php"); ?>

P.D.: Si no se crea el archivo de texto "users.dat" sin comillas, dará un error al crearlo el propio script por primera vez. Después, una vez creado con atributos 777, funcionará correctamente.

Espero sea útil para experimentar.

Un saludo
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $archivo = "users.dat";
    $inactivo = 600;
    $contar = 0;
    $fp = fopen($archivo, "r");
    $tiempo = time();
    $contenido = fread($fp, filesize($archivo));
    fclose($fp);
    $lineas = split("\\n", $contenido);
    $filas = file($archivo);
    for ($a = 0; $a < sizeof($filas); $a++) {
      $datos = split(':', $lineas[$a]);
      $descontar = $tiempo - $inactivo;
      if ($datos[0] != $REMOTE_ADDR && $datos[1] > ($descontar)) {
        $res .= $datos[0] . ":" . $datos[1] . "\\n";
        $contar++;
      }
    }
    $res .= "$REMOTE_ADDR:$tiempo\\n";
    $contar++;
    $fp = fopen($archivo, "w");
    fwrite($fp, $res);
    fclose($fp);
    if ($contar == 1) {
      $contar = "1 usuario activo";
    } else {
      $contar = "$contar usuarios activos";
    }
    echo $contar;
    ?>
  </body>
</html>
