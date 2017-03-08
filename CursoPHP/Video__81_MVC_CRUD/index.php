<!--
    @Created on : 29-dic-2016, 19:10:31
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 

Index -> RAIZ

Aqui incluimos al controlador 
que incluye a la vista 
que a la vez incluye el modelo

Los estilos tambien se ejecuta en en Controlador 

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      @import "hoja.css";
    </style>
  </head>
  <body>
    <h1>Modelo Vista Controlador</h1>
    <table>
      <?php
      require_once ("controlador/Personas_controlador.php");
      ?>
    </table>
  </body>
</html>










