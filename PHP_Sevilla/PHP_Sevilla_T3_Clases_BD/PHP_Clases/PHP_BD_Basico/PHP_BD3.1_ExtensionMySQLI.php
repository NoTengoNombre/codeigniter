<!--
    @Created on : 25-nov-2016, 0:13:21
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
//Establecer conexion con servidor MYSQL y Consultar su version
//objeto
$dwes = new mysqli('localhost', 'root', '', 'world', '3306');
print $dwes->server_info;
echo '<br>';

//Utilizando llamadas a funciones
//objeto 
$dwes = mysqli_connect('localhost', 'root', '', 'world', '3306');
echo '<br>';
print mysqli_get_server_info($dwes);
?>
