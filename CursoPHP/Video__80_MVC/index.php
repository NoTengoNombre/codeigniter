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

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Modelo Vista Controlador</h1>
    <table>
      <tr>
        <td>
          <?php
          require_once ("controlador/Productos_controlador.php");
          ?>
        </td>
      </tr>
    </table>
  </body>
</html>










