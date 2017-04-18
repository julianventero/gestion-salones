<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo_fisico extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($dat) {
		return $this->db->insert('equipos_fisicos', $dat);
	}

	public function consultarid_salon(){
		$this->db->select('id_salon, aula, ubicacion');    
		$this->db->from('salon');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function consultarid_equipo($nombre){
		$this->db->select('id_equipos_fisicos');    
		$this->db->from('equipos_fisicos');
		$this->db->where("nombre", "$nombre");
		$query = $this->db->get();
		$result=$query->row_array();
 		return $result['id_equipos_fisicos'];
	}

	public function insertarsalon_has_equipo($dat4) {
		return $this->db->insert('salon_has_equiposfisicos', $dat4);
	}
}