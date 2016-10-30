<!--
    @Created on : 30-oct-2016, 9:20:34
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$a = 3;
$b = &$a;
print "$a\n";
print '<br>';
print "$b\n";
print '<br>';

$a = 4;
print "$a\n";
print "$b\n";
?>
