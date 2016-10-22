<!--
    @Created on : 22-oct-2016, 13:23:58
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->


<?php
//  CONTROLADOR
include './Palindromo.php';

$p = new Palindromo();
//$result = $p->comprobarPalindromo($_REQUEST['texto']);
$result = $p->comprobarPalindromo(INPUT_GET['texto']);
if ($result == 0) {
  echo "Si es un palindromo";
} else {
  echo "No es un palindromo";
}
?>


