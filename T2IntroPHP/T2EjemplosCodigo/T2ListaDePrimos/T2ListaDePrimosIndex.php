<!--
    @Created on : 22-oct-2016, 16:45:49
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
//Incluye datos clase T2Primo
include './T2Primo.php';

//Instancia el objeto
$p = new T2Primo();
//almacena llamada al metodo desde le formulario
$result = $p->listaPrimos($_REQUEST["numero"]);

echo "<table border='3'><tr>";
for ($i = 0; $i < count($result); $i++) {
  echo "<td>" . $result[$i] . " </td>";
  if (($i + 1 ) % 10 == 0) {
    echo "</tr><tr>";
  }
}
echo "</tr></table>";

