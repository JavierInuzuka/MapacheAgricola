<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author Javier
 */
class Administrador extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        //Verificar la sesion esta creada
        if($this->session->userdata("administrador")){
           $this->load->view('template2/header');
           $this->load->view('administrador/home');
           $this->load->view('template2/footer');           
        }else{
            redirect('index');
        }

    }
}
