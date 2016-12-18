<?php

class Seguridad {

  public static function getIdUsuario() {
    if (isset($_SESSION["idusuario"]))
      $idusr = $_SESSION["idusuario"];
    else
      $idusr = "";

    return $idusr;
  }

  public static function getTipoUsuario() {
    if (isset($_SESSION["tipousuario"]))
      $tipousr = $_SESSION["tipousuario"];
    else
      $tipousr = "";

    return $tipousr;
  }

  public static function getNombreUsuario() {
    if (isset($_SESSION["usuario"]))
      $nombreusr = $_SESSION["usuario"];
    else
      $nombreusr = "";

    return $nombreusr;
  }

  public static function setIdUsuario($id) {
    $_SESSION["idusuario"] = $id;
  }

  public static function setTipoUsuario($tipo) {
    $_SESSION["tipousuario"] = $tipo;
  }

  public static function setNombreUsuario($nombre) {
    $_SESSION["usuario"] = $nombre;
  }

  public static function setAll($nombre, $id, $tipo) {
    $_SESSION["idusuario"] = $id;
    $_SESSION["tipousuario"] = $tipo;
    $_SESSION["usuario"] = $nombre;
  }

  public static function cerrarSesion() {
    session_destroy();
  }

}
