<?php

class Seguridad {

  public static function getIdUsuario() {
    if (isset($_COOKIE["idusuario"])) {
      $idusr = $_COOKIE["idusuario"];
    } else {
      $idusr = "";
    }
    return $idusr;
  }

  public static function getTipoUsuario() {
    if (isset($_COOKIE["tipousuario"])) {
      $tipousr = $_COOKIE["tipousuario"];
    } else {
      $tipousr = "";
    }
  }

  public static function getNombreUsuario() {
    if (isset($_COOKIE["usuario"])) {
      $nombreusr = $_COOKIE["usuario"];
    } else {
      $nombreusr = "";
    }
  }

  public static function setIdUsuario($id) {
    setcookie("idusuario", $id, time() + 1800);
  }

  public static function setTipoUsuario($tipo) {
    setcookie("tipousuario", $tipo, time() + 1800);
  }

  public static function setNombreUsuario($nombre) {
    setcookie("usuario", $nombre, time() + 1800);
  }

  public static function setAll($nombre, $id, $tipo) {
    setcookie("usuario", $nombre, time() + 1800);
    setcookie("idusuario", $id, time() + 1800);
    setcookie("tipousuario", $tipo, time() + 1800);
  }

  public static function cerrarSesion() {
    setcookie("usuario", "", -1);
    setcookie("idusuario", "", -1);
    setcookie("tipousuario", "", -1);
  }

}
