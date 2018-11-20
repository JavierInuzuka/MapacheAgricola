<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error404
 *
 * @author Javier
 */
class Error404 extends CI_Controller{
    //put your code here
    	public function index(){
		$this->load->view('template1/header');
                $this->load->view('404');
                $this->load->view('template1/footer');
	}
}
