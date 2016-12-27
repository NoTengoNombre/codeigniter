<!--
    @Created on : 26-dic-2016, 21:51:03
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 60 sg * 60 minutos * 24 horas * 30 dias = 2592000 segundos -> 1 mes 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <!--Usara los directorios sessiones % cookies y los 
    sudirectorios y otros script -->
    <?php
//                                                                                         hora del sistema Unix + 30 sg 
    setcookie("duracion_cookie", "Esta es la informacion de nuestra 2º cookie : Duracion", time() + 30, "/PHP_PildorasInformaticas/CursoPHP/Video__64_sessiones_y_cookies_duracion/zona_contenidos_Aqui_Trabaja_La_Cookie/");
    ?>
  </body>
</html>
