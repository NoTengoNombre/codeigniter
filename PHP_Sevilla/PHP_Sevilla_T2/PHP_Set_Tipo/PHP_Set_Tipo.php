<!--
    @Created on : 23-nov-2016, 21:24:57
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$a = $b = "3.14159265";
settype($b, "float");
print "\$a vale $a y es de tipo " . gettype($a);
print "<br>";
print "\$b vale $b y es de tipo " . gettype($b);

$c = $b * 2;
echo '<hr>';
echo $c;

printf("%2f. " . $c);
?>
