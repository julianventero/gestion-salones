<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
		$this->load->view('index');
    }
    public function roles() {
		$this->load->view('admin/roles');
    }
    // Cargar Menu
    public function prestamo() {
    	redirect('index.php/Prestamo/prestamo');
    }
    public function equiposFisicos() {
    	redirect('index.php/Equipos/equiposFisicos');
    }
    public function usuarios() {
    	redirect('index.php/Usuarios/usuarios');
    }
    public function reparacion() {
    	redirect('index.php/Reparacion/reparacion');
    }
    public function aulas() {
    	redirect('index.php/Aulas/aulas');
    }
    public function inicio() {
    	redirect('index.php/Inicio/inicio');
    }
    public function contacto() {
    	redirect('index.php/Inicio/contacto');
    }
    public function ayuda() {
    	redirect('index.php/Inicio/ayuda');
    }

    public function registrar(){
        if ( ! $this->input->post('nombre_rol'))
        {
            redirect('index.php/Roles/roles');
        }else{
            $nombre_rol = $this->input->post('nombre_rol');
            $permisos = $this->input->post('permisos');
            $datos = array('nombre' => $nombre_rol,'estado' => '1');
            //insertar rol
            $this->Rol->insertar($datos);
            //id_rol del rol que acabe de insertar
            $id_rol = $this->Rol->consultar_rol($nombre_rol);
            //ciclo pata insertar los permisos que se le dieron al rol creado
            for ($i=0;$i<count($permisos);$i++){     
                $datos_rol = array('id_rol' => $id_rol,'id_permiso' => $permisos[$i]);
                $this->Rol->insertarHas($datos_rol);
            } 
            redirect('index.php/Roles/roles');
        }
    }
    public function eliminar(){
        $id_rol = $this->input->post('id_rol_modal');
        echo "hola ".$id_rol;
        $dato = array('estado' => '0');
        $this->Rol->eliminar_rol($dato,$id_rol);
        redirect('index.php/Roles/roles');
    }
    public function consultarRoles() {
        // Area es la clase y listar() es el metodo. 
        $data['listarRoles']= $this->Rol->listar();
        //Asi se carga la vista
        $this->session->set_flashdata('carga', 'true');
        $this->load->view('admin/roles', $data );
    }
}