<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
		$this->load->view('index');
    }
    public function usuarios() {
        $data['listRoles'] = $this->Rol->consultar_roles();
		$this->load->view('admin/usuario', $data);
    }
    // Cargar Menu
    public function prestamo() {
    	redirect('index.php/Prestamo/prestamo');
    }
    public function equiposFisicos() {
    	redirect('index.php/Equipos/equiposFisicos');
    }
    public function reparacion() {
    	redirect('index.php/Reparacion/reparacion');
    }
    public function aulas() {
    	redirect('index.php/Aulas/aulas');
    }
    public function roles() {
    	redirect('index.php/Roles/roles');
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
     public function registrar_usuario(){
        if (!$this->input->post('codigo') or !$this->input->post('nombre') or !$this->input->post('apellido')
            or !$this->input->post('usuario') or !$this->input->post('correo') or !$this->input->post('contrasena') or !$this->input->post('telefono') or !$this->input->post('selectRol'))
        {
            redirect('index.php/Usuarios/usuarios');
        }else{
            $codigo = $this->input->post('codigo');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $usuario = $this->input->post('usuario');
            $correo = $this->input->post('correo');
            $contrasena = $this->input->post('contrasena');
            $telefono = $this->input->post('telefono');
            $rol = $this->input->post('selectRol');
            $fecha_creacion=date('y-m-d');
            $datos = array('cedula' => $codigo,'nombre' => $nombre,'apellido' => $apellido,'correo' => $correo, 'contrasena' => $contrasena, 'fecha_creacion'=>$fecha_creacion, 'nombre_usuario' => $usuario,'telefono' => $telefono,'ultimo_acceso'=> $fecha_creacion, 'id_rol'=>$rol);
            //insertar usuario
            $this->Usuario->insertar($datos);
            redirect('index.php/Usuarios/usuarios');
        }
    }
}