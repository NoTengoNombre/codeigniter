<!--
    @Created on : 24-nov-2016, 16:20:00
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
    <style>
      p{
        font-size: 30px;
        text-align: center;
        height: 50px;
        width: 100px;
        background-color: #000;
        color:#CE2B37;
      }
    </style>
  </head>
  <body>
    <?php
    $modulos = array("PR" => "Programacion", "BD" => "Base de datos", "DWES" => "Desarrollo web en entorno del servidor");

    foreach ($modulos as $key) {
      echo '<br>' . $key;
    }
    ?>
  </body>
</html>
