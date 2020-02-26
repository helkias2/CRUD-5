<?php
class Produtos_model extends CI_Model{

    public function bucaTodos(){
      $this->db->where("vendido",NULL);
      return $this->db->get("produtos")->result_array();
    }

    public function addProdutos($produtos){
      $this->db->insert("produtos", $produtos);
    }

    public function getAllProdutos($id){
      $this->db->where('id', $id);
      return $this->db->get('produtos')->row_array();
    }

    public function buscaVendidios($usuarios){
        $id = $usuarios['Id'];
      //  $this->db->from("produtos");
        $this->db->join("vendas", "vendas.produto_id = produtos.Id");
        $this->db->where("vendido", TRUE);
        $this->db->where("id_usuario", $id);
        return $this->db->get("produtos")->result_array();
    }
}