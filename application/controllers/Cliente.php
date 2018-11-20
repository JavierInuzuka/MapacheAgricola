<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Javier
 */
class Cliente extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        //Veridficar si la sesion esta creada
        if($this->session->userdata("cliente")){
           $this->load->view('template2/header');
           $this->load->view('cliente/home');
           $this->load->view('template2/footer');           
        }else{
            redirect('index');
        }

    }
}
