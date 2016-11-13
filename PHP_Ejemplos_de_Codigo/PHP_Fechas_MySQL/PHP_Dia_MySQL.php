<!--
    @Created on : 13-nov-2016, 21:16:44
    @Author     : RVS - N.F.N.D
    @Pag        : https://www.yukei.net/2013/11/trabajar-con-fechas-en-php/
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    // todas las definiciones de intervalo van precedidas de "P" y luego las cantidades y unidades correspondientes
    $un_dia = new DateInterval('P1D');
// no se pueden mezclar días con semanas
    $dos_meses_y_medio = new DateInterval('P2M2W');
// al usar un intervalo de tiempo, se debe usar "T" antes del rango de tiempo
    $un_dia_y_medio = new DateInterval('P1DT12H');
    $tres_horas_y_cuarto = DateInterval('PT3H30M');

    $ahora = new DateTime('now', new DateTimeZone('America/Santiago'));
// OJO: los métodos de DateTime modifican el objeto original
// agregar 1 día a "ahora"
    $ahora->add($un_dia);
// ... luego, restar 1 día y medio
    $ahora->sub($un_dia_y_medio);
// ... y luego, agregar dos meses y medio
    $ahora->add($dos_meses_y_medio);
// en todos los casos estamos trabajando sobre la misma fecha
// ... o se puede utilizar un objeto DateTimeImmutable
    $ahora = new DateTimeImmutable('now', new DateTimeZone('America/Santiago'));
// con DateTimeImmutable, los métodos retornan un nuevo objeto
    $manana = $ahora->add($un_dia);
// dos meses y medio más
    $despues = $ahora->add($dos_meses_y_medio);
    ?>
  </body>
</html>
