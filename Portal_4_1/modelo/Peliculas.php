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

  public static function getAllPeliculas() {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas = $db->consulta("SELECT * FROM peliculas");
    $db->desconectar();
    return $lista_peliculas;
  }

  public static function getPeliculasId($id) {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas[] = $db->query("SELECT * FROM peliculas WHERE id_video = '$id'");
    $db->desconectar();
    return $lista_peliculas;
  }

  public static function insertarPeliculas() {
    $titulo = $_REQUEST["titulo"];
    $duracion = $_REQUEST["duracion"];
    $estreno = $_REQUEST["estreno"];
    $sinopsis = $_REQUEST["sinopsis"];
    $genero = $_REQUEST["genero"];
    $tipo = $_REQUEST["tipo"];
    $formato = $_REQUEST["formato"];
    $enlace = $_REQUEST["enlace"];
    $imagen = $_REQUEST["imagen"];
    $idusuario = Seguridad::getIdUsuario();

    $consulta = "INSERT INTO peliculas (id_video,id_usuario,titulo,duracion,estreno,sinopsis,genero,tipo,formato,enlace,imagen) VALUES ('" . $id_video . "','" . $id_usuario . "','" . $titulo . "','" . $duracion . "','" . $estreno . "','" . $sinopsis . "','" . $genero . "','" . $tipo . "','" . $formato . "','" . $enlace . "','" . $imagen . "');";

    
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
    $sql = "UPDATE peliculas SET titulo ='" . $titulo . "' , duracion ='" . $duracion . "' , estreno ='" . $estreno . "' , sinopsis ='" . $sinopsis . "' , genero ='" . $genero . " , tipo ='" . $tipo . "' , formato = '" . $formato . "' , enlace ='" . $enlace . "' , imagen ='" . $imagen . "' WHERE cod_pelicula='" . $_REQUEST['cod_pelicula'] . "';";
  }

  public static function borrarPeliculas() {
    $db = new DBAbstract();
    $db->conectar();
  }

}
?>