<!--
    @Created on : 19-dic-2016, 19:03:09
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
      .resaltar{
        color: #F00;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <?php
    $nombre = "Juan";

    echo "Hola $nombre";
    echo '<br>';
    echo 'Hola $nombre';
    

    echo "<p class='resaltar'>Esto es un ejemplo de frase con comillas simples</p>";
    echo "<p class=\"resaltar\">Esto es un ejemplo de frase con barras invertidas</p>";
    ?>
  </body>
</html>
