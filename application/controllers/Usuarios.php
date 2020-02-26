<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{

    public function novo() {
        // $this->output->enable_profiler(TRUE);

        if($this->input->post()){
            $usuario = array(
                "nome" => $this->input->post('nome'),
                "email" => $this->input->post('email'),
                "senha" => md5($this->input->post('password')),
                "datacad" => date('Y')
            );
        }else{

            return '';
        }
     
        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);

        $this->load->view('usuarios/novo');

    }
}