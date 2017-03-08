<!--
    @Created on : 24-nov-2016, 12:51:12
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
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
    date_default_timezone_set('Europe/Madrid');
    $numero_mes = date('m');
    print_r("valor del mes : " . $numero_mes);
    echo '<br>';
    switch ($numero_mes) {
      case 1: $mes = "Enero";
        break;
      case 2: $mes = "Febrero";
        break;
      case 3: $mes = "Marzo";
        break;
      case 4: $mes = "Abril";
        break;
      case 5: $mes = "Mayo";
        break;
      case 6: $mes = "Junio";
        break;
      case 7: $mes = "Julio";
        break;
      case 8: $mes = "Agosto";
        break;
      case 9: $mes = "Septiembre";
        break;
      case 10: $mes = "Octubre";
        break;
      case 11: $mes = "Noviembre";
        break;
      case 12: $mes = "Diciembre";
        break;
      default: "Sin Dia del Mes";
    }

    $numero_dia_semana = date("N");
    print_r("valor de la semana : " . $numero_dia_semana);
    echo '<hr>';
    switch ($numero_dia_semana) {
      case 1 : $dia_Semana = "Lunes";
        break;
      case 2 : $dia_Semana = "Martes";
        break;
      case 3 : $dia_Semana = "Miercoles";
        break;
      case 4 : $dia_Semana = "Jueves";
        break;
      case 5 : $dia_Semana = "Viernes";
        break;
      case 6 : $dia_Semana = "Sabado";
        break;
      case 7 : $dia_Semana = "Domingo";
        break;
      default: "Sin dia de la semana";
    }
    echo $dia_Semana . " - " . date("j") . " de " . $mes . " de " . date("Y");
    ?>
  </body>
</html>
