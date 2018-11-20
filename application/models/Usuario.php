<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Javier
 */
class Usuario extends CI_Model {
    
    public function login($email, $clave){
        $this->db->where("email",$email);
        $this->db->where("clave",$clave);
        return $this->db->get("usuario")->result();
    }
    
    public function crearUsuario($rut, $nombre, $apellido,$email, $telefono, $clave, $foto){
        $data=array("rut"=>$rut,
                    "nombre"=>$nombre,
                    "apellido"=>$apellido,
                    "email"=>$email,
                    "telefono"=>$telefono,
                    "perfil"=>2,
                    "clave"=>$clave,
                    "foto"=>$foto);
        
        return $this->db->insert("usuario",$data);
    }
}
