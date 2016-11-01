<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset = "UTF-8">
    <title>hf</title>
  </head>
  <body>
    <?php
    echo "<table border='1'>";
    for ($i = 32; $i < 128; $i++) {
      $a = 0;
      echo "<tr>";
      echo "<td>C&oacutedigo;</td>";
      echo "<td>Valor</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>" . chr($i) . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>