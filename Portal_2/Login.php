<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Login {

  public static function checkLogin() {
    $usuario = $_REQUEST["usuario"];
    $password = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "portal");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $sql = "SELECT * FROM usuarios";
    $result = $conex->query($sql);
    echo "Estoy dentro de la base de datos";
    echo "Bienvenido a la web : <strong> " . $usuario . "</strong><br/>";
    echo "<strong>Menu</strong><br/>";
    $result->free(); // libera memoria
    $conex->close(); // cierra bd
  }

}
