<?php

class Seguridad {

  /**
   * 
   * @param type $id
   */
  function setIdUsuario($id) {
    setcookie("idusuario", $id, time() + 1800 /* Tiempo de expiracion */);
  }

  /**
   * 
   * @param type $tipo
   */
  function setTipoUsuario($tipo) {
    setcookie("tipousuario", $tipo, time() + 1800 /* Tiempo de expiracion */);
  }

  /**
   * 
   * @param type $nombre
   */
  function setNombreUsuario($nombre) {
    setcookie("usuario", $nombre, time() + 1800 /* Tiempo de expiracion */);
  }

  /**
   * 
   * @param type $nombre
   * @param type $id
   * @param type $tipo
   */
  function setAll($nombre, $id, $tipo) {
    setcookie("usuario", $nombre, time() + 1800 /* Tiempo de expiracion */);
    setcookie("idusuario", $id, time() + 1800 /* Tiempo de expiracion */);
    setcookie("tipousuario", $tipo, time() + 1800 /* Tiempo de expiracion */);
  }

  /**
   * 
   * @return string
   */
  function getIdUsuario() {
    if (isset($_COOKIE["idusuario"])) {
      $idusr = $_COOKIE["idusuario"];
    } else {
      $idusr = "";
    }

    return $idusr;
  }

  /**
   * 
   */
  function getTipoUsuario() {
    if (isset($_COOKIE["tipousuario"])) { //SI : esta definida la cookies
      $tipousr = $_COOKIE["tipousuario"];
    } else {
      $tipousr = "";
    }
  }

  /**
   * 
   */
  function getNombreUsuario() {
    if (isset($_COOKIE["usuario"])) {
      $nombreusr = $_COOKIE["usuario"];
    } else {
      $nombreusr = "";
    }
  }

  /**
   * 
   */
  function cerrarSesion() {
    setcookie("usuario", "", -1 /* Tiempo de expiracion */);
    setcookie("idusuario", "", -1 /* Tiempo de expiracion */);
    setcookie("tipousuario", "", -1 /* Tiempo de expiracion */);
  }

}
