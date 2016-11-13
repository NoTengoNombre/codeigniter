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
    // por compatibilidad, es mejor siempre especificar la zona horaria
    $timezone = new DateTimeZone('America/Santiago');

// crear un objeto de fecha/hora a partir de un string de tiempo válido
// también podría ser un DATETIME de MySQL, p.ej: '2013-09-30 13:14:46'
    $some_date = new DateTime('now', $timezone);

// también puedes construir una fecha a partir de un formato específico:
    $another_date = DateTime::createFromFormat('d-m-Y', '25-01-1900', $timezone);

// o tomar un camino más largo
    $some_other_date = new DateTime(NULL, $timezone);
    $some_other_date->setDate(1986, 4, 26);
    $some_other_date->setTime(16, 58, 0);

// luego, puedes obtener la fecha en distintos formatos
    $formatted_date = $some_date->format('Y-m-d');
    $formatted_date_2 = $another_date->format('c');
    $tiempo_unix = $some_date->format('U');
    ?>
  </body>
</html>
