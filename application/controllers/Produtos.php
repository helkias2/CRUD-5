<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
        $this->load->library('unit_test');
    }
    public function index(){
            
      //  $this->output->enable_profiler(TRUE);
        $this->load->model('produtos_model');
        $produtos = $this->produtos_model->bucaTodos();

        $dados = array('produtos' => $produtos);
        $this->load->view("cabecalho.php");
        $this->load->view('produtos/index.php', $dados);
        $this->load->view("footer.php");
    }

    public function formulario(){
      autoriza();
      $this->load->view("cabecalho.php");
      $this->load->view('produtos/formulario');
      $this->load->view("footer.php");
    }

    public function novo(){
      $id_user = autoriza();   
      // $this->load->helper('validacao_helper');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[5]|max_length[225]');
      $this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[5]|max_length[255]');
      $this->form_validation->set_rules('preco', 'preco', 'trim|required|min_length[5]|max_length[255]');
      $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

      $sucesso =  $this->form_validation->run(); //ligando o validador da minha pagina

       if($sucesso){
            $produtos=array(
                "nome" => $this->input->post('nome'),
                "preco" => $this->input->post('preco'),
                "descricao" => $this->input->post('descricao'),
                "id_usuario" => $id_user['Id']
            );

            $this->load->model("produtos_model");
            $this->produtos_model->addProdutos($produtos);
            $this->session->set_flashdata('success', "Produtos inserido com sucesso");

            redirect('produtos');
        }else{
          $this->load->view("cabecalho.php");
          $this->load->view('produtos/formulario');
          $this->load->view("footer.php");
        }
    }

    
    public function mostra($id){
      $dados['title'] = "MOSTRA PRODUTOS";

      $this->load->model('produtos_model');
      $result = $this->produtos_model->getAllProdutos($id);
       
      $dados['produtos'] = $result;
      $this->load->helper("typography");
      // $test_name = 'Teste meus retornos';
      // print_r($this->unit->run($result, $result, $test_name));
      $this->load->view("cabecalho.php");
      $this->load->view('produtos/mostra', $dados);
      $this->load->view("footer.php");
    }

  //   function remover_palavra($valor){
  //     $posicao = strpos($valor, "melhor");
  //     echo $posicao;
  //     if($posicao != FALSE){
  //         return TRUE;
  //     }else{
  //         $this->form_validation->set_message("remover_palavra", "O campos '%s' nao pode conter a palavra 'melhor'");
  //         return FALSE;
  //     }
  // }
}