<!--
    @Created on : 15-ene-2017, 13:12:13
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
Entidad contenedora de informacion basada en atributos
y metodos de construccion , modificacion y consulta
de dichos atributos necesarios y suficientes para 
representar un bojeto con el que trabajar o procesar
informacion relativa al dominio del problema en el
que nos estamos moviendo
-->

<?php

/**
 * Esta clase representa un usuario de la app
 */
class Usuario {

//  ATRIBUTOS : definen los datos que se van a almacenar 
  private $nombreDeUsuario;
  private $palabraClave;
  public static $variable_entera_staticas; //publica por defecto
  var $variable; //publica por defecto

//  Constructor de la clase

  public function __construct() {
    
  }

  /**
   * Fijar nombre de usuario
   * 
   * @param type $nu
   */
  public function setNombreDeUsuario($nu) {
    $this->nombreDeUsuario = $nu;
  }

  /**
   * Fijar la clave
   * 
   * @param type $pc
   */
  public function setPalabraClave($pc) {
    $this->palabraClave = $pc;
  }

  /**
   * Obtener nombre usuario
   * 
   * @return type
   */
  public function getNombreDeUsuario() {
    return $this->nombreDeUsuario;
  }

  /**
   * Obtener palabra clave
   * 
   */
  public function getPalabraClave() {
    return $this->palabraClave;
  }

  public static function getFuncionStatica() {
    echo "<p style='color:#f00'>get Funcion Static</p>";
  }

  public static function setFuncionStatica_Valor($v) {
    echo "<p style='color:#f00'>Funcion Static</p>";
    Usuario::$variable_entera_staticas = $v;
  }

  public static function getFuncionStatica_Valor() {
    echo "<p style='color:#f00'>Funcion Static</p>";
    return Usuario::$variable_entera_staticas;
  }

}
