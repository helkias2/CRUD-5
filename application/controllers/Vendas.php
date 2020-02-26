<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller{

    public function index(){

        $this->load->helper("validacao");
        $usuarios = autoriza();   
        $this->load->model("Produtos_model", "produtos");
        $dados['produtosVendidos'] = $this->produtos->buscaVendidios($usuarios);
        
        $this->load->view("cabecalho.php");
        $this->load->view('vendas/index', $dados);
        $this->load->view("footer.php");

    }

    public function nova(){
      
        $compador = autoriza();   
        $this->load->helper("validacao");
    
        if($compador){  
            $vendas = array(
                "produto_id" => $this->input->post('produto_id'),
                "comprador_id" => $compador['Id'],
                "data_entrega" => data_para_mysql($this->input->post('data_de_entrega'))
             );
        
            $this->load->model(array('vendas_model','produtos_model', 'usuarios_model'));
            $this->vendas_model->novaVenda($vendas);

            $this->load->library("email");
            $config["protocol"]      = "smtp";
            $config["smtp_host"]     = "ssl://smtp.gmail.com";
            $config["smtp_user"]     = "antonio@rpm.com.br";
            $config["smtp_pass"]     = "T0n1_182";
            $config["charset"]       = "utf-8";
            $config["mailtype"]      = "html";
            $config["newline"]       = "\r\n";
            $config["smtp_port"]     = "465";
            $this->email->initialize($config);

            $produt = $this->produtos_model->getAllProdutos($vendas['produto_id']);
            $vendendor = $this->usuarios_model->busca($produt['id_usuario']);

            $dados = array("produto" => $produt);
            $conteudo = $this->load->view("vendas/email.php", $dados, TRUE);

            $this->email->from("antonio@rpm.com.br", "Mercado");
            $this->email->to(array($vendendor['email']));
            $this->email->subject("Seu produto {$produt['nome']} foi vendido!");
            $this->email->message($conteudo);
            var_dump($this->email->send());
            $this->email->print_debugger();
            
            $this->session->set_flashdata("success", "Pedido de compra efetuado com sucesso!");
            redirect("/");
        }
    }
}
