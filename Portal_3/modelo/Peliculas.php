<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
// Modelo Películas / Videos

include_once "DBAbstract.php";

class Peliculas {

  public function getAllVideos() {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas = $db->consulta("SELECT * FROM videos");
    $db->desconectar();
    return $lista_peliculas;
  }

  public function getVideos($id) {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas[] = $db->query("SELECT * FROM videos WHERE id_video = '$id'");
    $db->desconectar();
    return $lista_peliculas;
  }

  public function insertarVideos() {
    $titulo = $_REQUEST["titulo"];
    $duracion = $_REQUEST["duracion"];
    $estreno = $_REQUEST["estreno"];
    $sinopsis = $_REQUEST["sinopsis"];
    $genero = $_REQUEST["genero"];
    $tipo = $_REQUEST["tipo"];
    $formato = $_REQUEST["formato"];
    $enlace = $_REQUEST["enlace"];
    $imagen = $_REQUEST["imagen"];

    $db = new DBAbstract();
    $db->conectar();
    $consulta = "INSERT INTO peliculas(titulo','duracion','estreno','sinopsis','genero','tipo','formato','enlace','imagen') VALUES ('" . $titulo . "','" . $duracion . "','" . $estreno . "','" . $sinopsis . "','" . $genero . "','" . $tipo . "','" . $formato . "','" . $enlace . "','" . $imagen . "');";
    $resultado = $db->manipulacion($consulta);
    if ($resultado > 0) {
      echo "Inserccion realizada";
    } else {
      echo "Inserccion NO realizada";
    }



    return $resultado;
  }

  public function actualizarVideos() {
    
  }

  public function borrarVideos() {
    
  }

}
?>