<!--
    @Created on : 30-oct-2016, 23:30:58
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
if (isset($_FILES['campoFile']['name'])) {
  $var = $_FILES['campoFile']['name'];
  echo 'Recibir fichero : ' . $var;
  print_r($var);
}
?>
