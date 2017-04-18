<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rol extends CI_Model {

	public function __construct() {
        parent::__construct();
	}
	public function insertar($datos) {
		return $this->db->insert('rol', $datos);
	}
	public function insertarHas($datos){
		return $this->db->insert('rol_has_permisos', $datos);
	}
	public function consultar_roles(){
		$this->db->from('rol');
		$this->db->where("estado", "1");
		$query = $this->db->get();
		return $query->result_array();;
	}
	public function consultar_rol($nombre){
		$this->db->from('rol');
		$this->db->where(compact('nombre'));
		$query = $this->db->get();
		$result=$query->row_array();
		return $result['id_rol'];
	}
	public function listar(){
		$this->db->select('rol.id_rol as id,rol.nombre as nombre1,permisos.nombre as nombre2');    
		$this->db->from('rol');
		$this->db->join('rol_has_permisos', 'rol.id_rol= rol_has_permisos.id_rol');
		$this->db->join('permisos', 'permisos.id_permiso= rol_has_permisos.id_permiso');
		$this->db->where("rol.estado", "1");
		$this->db->order_by("rol.nombre", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function eliminar_rol($dato, $id_rol) {
		return $this->db->update('rol', $dato, compact('id_rol'));
	}
}	

