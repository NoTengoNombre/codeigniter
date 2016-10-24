<!--
    @Created on : 22-oct-2016, 19:54:31
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : El servidor "pensará" un número al azar entre 1 y 100 (puede cambiarse el límite para facilitar o dificultar el juego). 
El usuario tratará de adivinarlo escribiéndolo en un cuadro de texto, y el servidor le responderá diciendo "Mi número es mayor" o "Mi número es menor", hasta que el jugador acierte. Entonces el servidor le informará del número de intentos que ha necesitado para adivinar el número.
-->

<?php
// (index) CONTROLADOR
include './InterfazUsuario.php';
include './NumSecreto.php';
session_start();
//Creamos y traemos los objetos , los recuperamos de 
//$_SESSION si ya fueron creados 

if (!isset($_SESSION["ui"])) { // Primera Ejecucion 
//  Creamos objetos $ui y $ns
  $ui = new InterfazUsuario(); //Interfaz
  $ns = new T2NumSecreto(); //Modelo
  $ns->elegirNuevoNumSecreto();
  $_SESSION["ui"] = $ui;
  $_SESSION["ns"] = $ns;
} else {
//  Los objetos han sido creados - Los recuperamos
  $ui = $_SESSION["ui"];
  $ns = $_SESSION["ns"];
}
// Operamos con los objetos 
if (!isset($_REQUEST["numero"])) { // Muestra el formulario para que le usuario elija un numero
  $ui->mostrarFormulario();
} else { // Compara el numero elegido por el usuario con el numero secreto
  $res = $ns->comparar($_REQUEST["numero"]);
  $ui->mostrarResultado($res);
}
