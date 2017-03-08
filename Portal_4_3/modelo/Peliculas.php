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
    $lista_peliculas = $db->consulta("SELECT * FROM videos"); // devuelve array peliculas
    $db->desconectar();
    return $lista_peliculas;
  }

  /**
   * Busqueda de peliculas por $id utilizando 
   * una consulta INNER JOIN
   * 
   * Devuelve un ARRAY que contiene una fila 
   * de la bd
   * 
   * @param type $id string id_video
   * @return type ARRAY con una fila con los datos
   */
  public static function getPeliculasId($id) {
    $db = new DBAbstract();
    $db->conectar();
    $pelicula = $db->consulta("SELECT * FROM videos INNER JOIN paises ON videos.id_pais = paises.id_paises WHERE videos.id_video = '$id'");
    $db->desconectar();
    return $pelicula[0];
  }

  /**
   * Busqueda de peliculas por $titulo utilizando
   * una consulta INNER JOIN
   * 
   * Devuelve un ARRAY con todos los datos del
   * array
   * 
   * @param type $titulo
   * @return type ARRAY con todas las filas de bd
   */
  public static function getPeliculasTitulo($titulo) {
    $db = new DBAbstract();
    $db->conectar();
    $lista_peliculas = $db->consulta("SELECT * FROM videos INNER JOIN paises ON videos.id_pais = paises.id_paises WHERE videos.titulo LIKE '%$titulo%'");
    $db->desconectar();
    return $lista_peliculas;
  }

  /**
   * Recibe los datos de un formulario y crea
   * un autoincremento mediante un alias
   * para no añadir id_pais repetido
   * 
   * 1º realiza select
   * 2º realiza insert
   * 
   * @return type
   */
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
    $id_pais = $_REQUEST["pais"];

    $db = new DBAbstract();
    $db->conectar();

//    maximoId = saca el ultimo id_video
    $consulta = "SELECT MAX(id_video) AS maximoId FROM videos";
    $resultado = $db->consulta($consulta); // esto devuelve un array
    $maxId = $resultado[0]["maximoId"]; // situo en la fila e inserto en la columna
    $nuevoId = $maxId + 1;

    $consulta = "INSERT INTO videos (id_video,id_usuario,titulo,duracion,estreno,sinopsis,genero,tipo,formato,enlace,imagen,id_pais) VALUES "
            . "('$nuevoId', '$idusuario', '$titulo','$duracion','$estreno','$sinopsis','$genero','" . $tipo . "','" . $formato . "','" . $enlace . "','" . $imagen . "', '$id_pais');";
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