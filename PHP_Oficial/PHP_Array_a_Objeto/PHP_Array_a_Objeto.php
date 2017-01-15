<!--
    @Created on : 15-ene-2017, 12:18:12
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$obj = (object)array('1' => 'foo');
var_dump(isset($obj->{'1'}));
var_dump(key($obj));

var_dump($obj);


?>
