<!--
    @Created on : 15-ene-2017, 13:12:13
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
Entidad contenedora de informacion basada en atributos
y metodos de construccion , modificacion y consulta
de dichos atributos necesarios y suficientes para 
representar un bojeto con el que trabajar o procesar
informacion relativa al dominio del problema en el
que nos estamos moviendo
-->

<?php
require_once ('./PHP_Clase_Uni_Sevilla.php');
$usuario = new Usuario();

$usuario->setNombreDeUsuario("chanquete");
$usuario->setPalabraClave("hamuerto");

echo 'Nombre de Usuario: ' . $usuario->getNombreDeUsuario() . '<br>';
echo 'Palabra Clave: ' . $usuario->getPalabraClave() . '<br>';

$usuario->setPalabraClave('nonosmoveran');

echo 'Nombre de Usuario : ' . $usuario->getNombreDeUsuario(), '<br>';
echo 'Palabra clave: ' . $usuario->getPalabraClave() . '<br>';


echo Usuario::getFuncionStatica();

echo Usuario::getFuncionStatica_Valor(5);

