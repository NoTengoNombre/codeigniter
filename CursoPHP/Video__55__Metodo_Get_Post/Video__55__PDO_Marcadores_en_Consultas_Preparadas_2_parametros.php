<!--
    @Created on : 25-dic-2016, 11:08:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Marcadores de una consulta preparadas
                  Uso de arrays asociativos en consultas preparadas
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body{
        background-color: #cccccc;
      }
      table{
        width: 300px;
        background: #000;
        color: #fff;
        border: 2px solid yellow;
        margin: auto; 
        padding: 5px;
      }
      tr {
        border: 2px solid #0f0;
      }
      td{
        text-align: left;
        border: 3px solid #00f;
      }

    </style>
  </head>
  <body>
    <form action="Video__55__PDO_Marcadores_en_Consultas_Preparadas_Recibir_Marcadores2.php" method="get">
      <table>
<!--        <tr>
          <td>Buscar
            <input type="text" name="buscar">
          </td>
        </tr>-->
        <tr>
          <td>Seccion
            <input type="text" name="seccion">
          </td>
        </tr>
        <tr>
          <td>Pais de Origen
            <input type="text" name="p_orig">
        </tr>
        </td>
        <tr>
          <td colspan="2">
            <input type="submit" name="enviando" value="!Dale">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
