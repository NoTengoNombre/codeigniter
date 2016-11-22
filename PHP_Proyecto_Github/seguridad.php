<?php

/**
 * Comprueba los id_usuarios 
 * Comprueba los getTipoUsuario
 * Comprueba los getNombreUsuario
 * Cierra la session
 * 
 */
class Seguridad {

  /**
   * obtener id_usuario
   * 
   * @return string
   */
  public static function getIdUsuario() {
    if (isset($_SESSION["id_usuario"])) {
      $idusr = $_SESSION["id_usuario"];
    } else {
      $idusr = "";
    }
    return $idusr;
  }

  /**
   * Obtener tipo de usuario
   * @return string
   */
  public static function getTipoUsuario() {
    if (isset($_SESSION["tipo_usuario"])) {
      $tipousr = $_SESSION["tipo_usuario"];
    } else {
      $tipousr = "";
    }
    return $tipousr;
  }

  /**
   * Obtener tipo de usuario
   * @return string
   */
  public static function getNombreUsuario() {
    if (isset($_SESSION["nombre_usuario"])) {
      $nombreusr = $_SESSION["nombre_usuario"];
    } else {
      $nombreusr = "";
    }
    return $nombreusr;
  }

  /**
   * Obtener url de la imagen del usuario
   * @return string
   */
  public static function getImagenUsuario() {
    if (isset($_SESSION["imagen_usuario"])) {
      $img = $_SESSION["imagen_usuario"];
    } else {
      $img = "";
    }
    return $img;
  }

  /**
   * Fijar valor id_usuario
   * @param type $id
   */
  public static function setIdUsuario($id) {
    $_SESSION["id_usuario"] = $id;
  }

  /**
   * Fijar valor tipo_usuario
   * @param type $tipo
   */
  public static function setTipoUsuario($tipo) {
    switch ($tipo) {
      case 0: $_SESSION["tipo_usuario"] = "admin";
        break;
      case 1: $_SESSION["tipo_usuario"] = "user";
        break;
      default: $_SESSION["tipo_usuario"] = "user";
    }
  }

  /**
   * fijar nombre de usuario
   * @param type $nombre
   */
  public static function setNombreUsuario($nombre) {
    $_SESSION["nombre_usuario"] = $nombre;
  }

  /**
   * Fijar valor imagen usuario
   * @param type $id
   */
  public static function setImagenUsuario($url) {
    $_SESSION["imagen_usuario"] = $url;
  }

  /**
   * Fijar todos los valores de usuarios
   * @param type $nombre
   * @param type $id
   * @param type $tipo
   */
  public static function setAll($nombre, $id, $tipo) {
    $_SESSION["id_usuario"] = $id;
    $_SESSION["tipo_usuario"] = $tipo;
    $_SESSION["nombre_usuario"] = $nombre;
  }

  /**
   * Cerrar session.
   */
  public static function cerrarSesion() {
    session_destroy();
  }

}
