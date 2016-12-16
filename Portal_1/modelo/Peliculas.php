<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
// Modelo Películas / Videos

include_once ("../DBAbstract.php");

class Peliculas {

  public function getAllPeliculas() {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas = $db->consulta("SELECT * FROM peliculas");
    $db->desconectar();
    return $lista_peliculas;
  }

  public function getPelicula($id) {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas[] = $db->query("SELECT * FROM peliculas WHERE idPelicula = '$id'");
    $db->desconectar();
    return $lista_peliculas;
  }

  public function insertarPelicula() {
    $titulo = $_REQUEST["titulo"];
    //...resto de datos del formulario de inserción...
    $db = new DBAbstract();
    $db->conectar();
    $resultado = $db->manipulacion("INSERT INTO Peliculas VALUES ($...");
    return $resultado;
  }

  public function actualizarPelicula() {
    
  }

  public function borrarPelicula() {
    
  }

}
?>