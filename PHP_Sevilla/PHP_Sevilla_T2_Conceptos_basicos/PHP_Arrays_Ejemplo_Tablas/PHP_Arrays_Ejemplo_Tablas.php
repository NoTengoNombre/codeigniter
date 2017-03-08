<!--
    @Created on : 24-nov-2016, 18:27:59
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
      td,th{
        border: 1px solid #ff0022;
        padding: 4px;
      }
      th{
        text-align: center;
      }
      table{
        border:1px solid #000000;
      }
    </style>
  </head>
  <body>
    <table>
      <tbody>
        <tr>
          <th>Variable</th>
          <th>Valor</th>
        </tr>
        <?php
        reset($_SERVER);
        while ($valor = each($_SERVER)) {
          print "<tr>";
          print "<td>" . $valor[0] . "</td>";
          print "<td>" . $valor[1] . "</td>";
          print "</tr>";
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
