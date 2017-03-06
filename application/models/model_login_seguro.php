<?php

class Model_login_seguro extends CI_Model {

  /**
   * No necesita 
   * $this->load->database 
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * Consulta BD con AR 
   * Obtiene los datos
   * Para usarlos en el 
   * Controlador 
   * 
   * @param type $usr String
   * @param type $pass String
   * @return type ARRAY 
   */
  public function check_login_modelo($usr, $pass) {
// selecciono columna "nombre" , nombre usuario del form
    $this->db->where("nombre", $usr); // dato enviado al metodo check_login - Controlador
// selecciono columna "password" , password del form
    $this->db->where("password", $pass); // dato enviado al metodo check_login - Controlador
// selecciona tabla usuarios para hacer la consulta
    $resultado = $this->db->get("usuarios"); // SELECT (*) FROM 'usuarios' 
    if ($this->db->affected_rows() > 0) { // si hay +1 fila
// $resultado - Objeto con todos los campos en forma de String
      foreach ($resultado->result() as $fila) { // Columnas BD se sacan como objetos
//      $datos_usuario -> ARRAY Instanciado en este momento
        $datos_usuario['idusr'] = $fila->usuario_id; // almaceno en array 'usuario_id' que es un String
        $datos_usuario['tipousr'] = $fila->tipo; // almaceno en array 'tipo' que es un String
      }
    } else {
      $datos_usuario = null; // es correcto esa linea ?
    }
    return $datos_usuario; //devuelve array de String
  }

  /**
   * Mostrar todos los usuarios
   * @return type Array "Objetos"
   */
  public function get_all_users() {
    $query = $this->db->get("usuarios"); // SELECT (*) FROM usuarios
    if ($query->num_rows() > 0) { // Si hay valores
      foreach ($query->result() as $fila) { // Saco los objetos
        $data[] = $fila; // Almaceno los OBJETOS dentro de un ARRAY
      }
      return $data; // Devuelve ARRAY de OBJETOS
    }
  }

  /**
   * Añade usuario tabla usuarios
   * Usa AR
   * 
   * @param type $usuario_id
   * @param type $nombre
   * @param type $apellidos
   * @param type $password
   * @param type $fotografia
   * @param type $telefono
   * @param type $email
   * @param type $tipo
   * @return string
   */
  public function add_user($usuario_id, $nombre, $apellidos, $password, $fotografia, $telefono, $email, $tipo) {
    $datos = array(
        'usuario_id' => $usuario_id,
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'password' => $password,
        'fotografia' => $fotografia,
        'telefono' => $telefono,
        'email' => $email,
        'tipo' => $tipo
    );
    $this->db->insert('usuarios', $datos);
    if ($this->db->affected_rows() > 0) {
      $r = "ok";
    } else {
      $r = "error";
    }
    return $r;
  }

  /**
   * 
   * @param type $usuario_id
   */
  public function delete_user($usuario_id) {
    $this->db->where("usuario_id", $usuario_id);
    $this->db->delete("usuario");
    if ($this->db->affected_rows() > 0) {
      $r = "ok";
    } else {
      $r = "error";
    }
    return $r;
  }

}
