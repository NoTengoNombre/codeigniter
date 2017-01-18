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

  /**
   * Devuelve todas las peliculas 
   * 
   * @return type array fetch_all
   */
  public static function getAllPeliculas() {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas = $db->consulta("SELECT * FROM peliculas"); // devuelve array peliculas
    $db->desconectar();
    return $lista_peliculas;
  }

  /**
   * 
   * @param type $id
   * @return type
   */
  public static function getPeliculasId($id) {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas = array();
    $lista_peliculas[] = $db->consulta("SELECT * FROM peliculas WHERE id_peliculas = '$id'");
    $db->desconectar();
    return $lista_peliculas;
  }

  public static function insertarPeliculas() {
    $idusuario = Seguridad::getIdUsuario();
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
    $consulta = "INSERT INTO peliculas (id_usuario,titulo,duracion,estreno,sinopsis,genero,tipo,formato,enlace,imagen) VALUES "
            . "('$idusuario', '$titulo','$duracion','$estreno','$sinopsis','$genero','" . $tipo . "','" . $formato . "','" . $enlace . "','" . $imagen . "');";
    echo $consulta;
    $resultado = $db->manipulacion($consulta);

    return $resultado;
  }

  public static function actualizarPeliculas() {
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
    $sql = "UPDATE peliculas SET titulo ='" . $titulo . "' , duracion ='" . $duracion . "' , estreno ='" . $estreno . "' , sinopsis ='" . $sinopsis . "' , genero ='" . $genero . " , tipo ='" . $tipo . "' , formato = '" . $formato . "' , enlace ='" . $enlace . "' , imagen ='" . $imagen . "' WHERE id_video='" . $_REQUEST['id_video'] . "';";
  }

  public static function borrarPeliculas() {


    $db = new DBAbstract();
    $db->conectar();
  }

}
?>