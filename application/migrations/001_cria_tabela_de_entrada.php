<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Cria_tabela_de_vendas extends CI_Migration {

    public function __construct()
    {
        $this->load->dbforge();
        $this->load->database();
    }

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE 
            ),
            'produto_id' => array(
                'type' => 'INT'
            ),
            'comparador_id' => array(
                'type' => 'INT'
            ),
            'data_entrega' => array(
                'type' => 'DATE'
            ),
        ));
        $this->dbforge->add_key('Id', true);
        $this->dbforge->create_table('vendas');
    }

    public function down() {
        $this->dbforge->drop_table('vendas');
    }

}

/* End of file Class_name.php */
