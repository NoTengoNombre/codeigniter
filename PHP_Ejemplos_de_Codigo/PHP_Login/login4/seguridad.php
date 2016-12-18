<?php

/* Implementación de la capa de seguridad mediante Cookies.
  Pueden usarse también variables de sesión ($_SESSION) u otros mecanismos */

class Seguridad {

  function getIdUsuario() {
    if (isset($_COOKIE["idusuario"]))
      $idusr = $_COOKIE["idusuario"];
    else {
      $idusr = "";
    }
    return $idusr;
  }

  function getTipoUsuario() {
    if (isset($_COOKIE["tipousuario"]))
      $tipousr = $_COOKIE["tipousuario"];
    else {
      $tipousr = "";
    }
    return $tipousr;
  }

  function getNombreUsuario() {
    if (isset($_COOKIE["usuario"]))
      $nombreusr = $_COOKIE["usuario"];
    else
      $nombreusr = "";
  }

  function setIdUsuario($id) {
    setcookie("idusuario", $id, time() + 1800);
  }

  function setTipoUsuario($tipo) {
    setcookie("tipousuario", $tipo, time() + 1800);
  }

  function setNombreUsuario($nombre) {
    setcookie("usuario", $nombre, time() + 1800);
  }

  function setAll($nombre, $id, $tipo) {
    setcookie("usuario", $nombre, time() + 1800);
    setcookie("idusuario", $id, time() + 1800);
    setcookie("tipousuario", $tipo, time() + 1800);
  }

  function cerrarSesion() {
    setcookie("usuario", "", -1);
    setcookie("idusuario", "", -1);
    setcookie("tipousuario", "", -1);
  }

}
