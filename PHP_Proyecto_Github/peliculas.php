<?php

// Modelo Películas
include_once ("dbAbstract.php");

class Peliculas {

  public function getAllPeliculas() {
    $db = new DbAbstract();
    $db->conectar();
    $lista_peliculas = $db->consulta("SELECT * FROM peliculas");
    $db->desconectar();
    return $lista_peliculas;
  }

  public function getPelicula($id) {
    $db = new DbAbstract();
    $db->conectar();
    $lista_peliculas[] = $db->query("SELECT * FROM peliculas WHERE idPelicula = '$id'");
    $db->desconectar();
    return $lista_peliculas;
  }

  public function insertarPelicula() {
    $titulo = $_REQUEST["titulo"];
    //...resto de datos del formulario de inserción...
    $db = new DbAbstract();
    $db->conectar();
    $resultado = $db->manipulacion("INSERT INTO Peliculas VALUES ($...");
    return $resultado;
  }

  public function borrarPelicula() {
    
  }

  public function modificarPelicula() {
    
  }

}

?>