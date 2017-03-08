<!--
    @Created on : 22-dic-2016, 13:11:31
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
    switch (rand(1, 2)):
      case 1:
        echo "Hola";
        break;
      case 2: "Adios";
        break;
      default: "Por Defecto";
    endswitch;
    ?>
  </body>
</html>
