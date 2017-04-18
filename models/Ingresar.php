<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresar extends CI_Model {

	public function __construct() {
        parent::__construct();
	}
	public function existe($usuario,$contrasena) {
		$this->db->from('persona');
		$this->db->where(compact('nombre_usuario'));
		$this->db->where(compact('contrasena'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
}	

