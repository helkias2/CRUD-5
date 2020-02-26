<?php

class Vendas_model extends CI_Model{

    public function novaVenda($vendas){
        $this->db->insert('vendas', $vendas);
        $this->db->update("produtos", 
            array("vendido" => 1),
            array("id" => $vendas["produto_id"])
        );
    }
}