<!--
    @Created on : 22-nov-2016, 22:14:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
include_once ("DBAbstract.php");

class Paises {

  /**
   * Conecta a la db con DBAbstract
   * 
   * Devuelve un ARRAY con todos 
   * los datos de BD de Paises
   * 
   * @return type ARRAY
   */
  public static function mostrar_todos_paises() {
    $db = new DBAbstract();
    $valor = $db->conectar();
    if ($valor == 0) { // devuelve 1 si es correcto , devuelve 0 si no lo es 
      echo 'Error en la conexion:';
      exit();
    }
    $total_paises = $db->consulta("SELECT * FROM paises;");
    $db->desconectar();
    return $total_paises;
  }

  public static function mostrar_paises_id() {
    $db = new DBAbstract();
    $valor = $db->conectar();
    if ($valor == 0) { // devuelve 1 si es correcto , devuelve 0 si no lo es 
      echo 'Error en la conexion:';
      exit();
    }

    $id = $_REQUEST['id_paises'];
    $total_paises = $db->consulta("SELECT * FROM paises WHERE id_paises= '" . $id . "';");
    $db->desconectar();
    return $total_paises;
  }

  public static function insertar_paises() {
    $db = new DBAbstract();
    $db->conectar();
    if ($db->conectar()) {
      echo 'Error en la conexion ' . $db->desconectar();
    }

    $id_paises = $_REQUEST['id_paises'];
    $pais = $_REQUEST['pais'];
    $ciudad = $_REQUEST['ciudad'];

    $consulta = "INSERT INTO paises (id_paises,pais,ciudad) VALUES ('" . $id_paises . "','" . $pais . "','" . $ciudad . "');";

    $insercion_correcta = $db->manipulacion($consulta);

    return $insercion_correcta;
  }

  public static function actualizar_paises() {
    
  }

  public static function borrar_paises() {
    
  }

}
