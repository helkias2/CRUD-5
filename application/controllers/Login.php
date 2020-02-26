<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function autenticar(){
        //  $this->output->enable_profiler(TRUE);
       

        // if($this->input->post()){
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->load->model('usuarios_model');
            $usuario =  $this->usuarios_model->emailSenha($email, $password);  
  
           
            if($usuario){               
                $this->session->set_userdata('usuario_logado', $usuario);
               
                $this->session->set_flashdata('success', "Logado com sucesso"); 
            }else{
                $this->session->set_flashdata('danger', "Email ou senha Invalido");
             
            }
        // }
       
            redirect('/');
    }

    public function logout(){
        $this->session->unset_userdata('usuario_logado');
        $this->session->set_flashdata('danger', "Usuario deslogado"); 
        redirect('/');

    }


}