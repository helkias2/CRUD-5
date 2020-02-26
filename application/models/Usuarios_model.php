<?php

class Usuarios_model extends CI_Model{

    public function salva($usuarios) {
        $this->db->insert("usuarios", $usuarios);
    }

    public function emailSenha($email, $senha){
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $usuarios = $this->db->get('usuarios')->row_array();
        return $usuarios;
    }

    public function busca($id){
        $this->db->where("Id",$id);
       return $this->db->get("usuarios")->row_array();
    }
}