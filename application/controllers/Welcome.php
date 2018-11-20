<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    

        public function __construct() {
            parent::__construct();
            $this->load->model('usuario');
        }


        public function index(){
		$this->load->view('template1/header');
                $this->load->view('login');
                $this->load->view('template1/footer');
	}
        
        public function registrar(){
            	$this->load->view('template1/header');
                $this->load->view('registrar');
                $this->load->view('template1/footer');
        }
        
        public function login(){
            $email = $this->input->post('email');
            $clave = $this->input->post('clave');
            //Llamada modelo
            $arrayUser = $this->usuario->login($email, md5($clave));
            
            if(count($arrayUser)>0){
                if($arrayUser[0]->perfil ==1){
                    //Crear una sesion Administrador
                    $this->session->set_userdata("administrador",$arrayUser);
                  echo json_encode(array("msg"=>"administrador"));
                } else {
                    //Crear una sesion Cliente
                    $this->session->set_userdata("cliente",$arrayUser);
                  echo json_encode(array("msg"=>"cliente"));   
                }
            }else{
                echo json_encode(array("msg"=>"0"));
            }
        }
        
        public function logout(){
            $this->session->sess_destroy();
            redirect('index');
        }
        
        public function crearCliente(){
            $rut = $this->input->post("rut");
            $nombre = $this->input->post("nombre");
            $apellido = $this->input->post("apellido");
            $email = $this->input->post("email");
            $telefono = $this->input->post("telefono");
            $clave = $this->input->post("clave");
            
            $path = $_FILES["file"]["tmp_name"];
            
            if(is_uploaded_file($path) && !empty($_FILES)){
                $foto = file_get_contents($path);
            if($this->usuario->crearUsuario($rut,$nombre,$apellido,$email,$telefono, md5($clave),$foto)){
                echo json_encode(array("msg"=>"Registro exitoso"));
                }else{
                    echo json_encode(array("msg"=>"Error al ingresar"));
                }
            } else {
                echo json_encode(array("msg"=>"Error de archivo"));
            }
        }
       
        
}
