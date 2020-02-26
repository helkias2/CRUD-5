<?php

    function remover_palavra($valor){
        $posicao = strpos($valor, "melhor");
        if($posicao != FALSE){
            return TRUE;
        }else{
            $this->form_validation->set_message("remover_palavra", "O campos '%s' nao pode conter a palavra 'melhor'");
            return FALSE;
        }
    }

    function data_para_mysql($dataPT){
        $partes = explode('/', $dataPT);
        return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
    }

    function data_para_pt($dataMysql){
        $partes = new DateTime($dataMysql);
        return $partes->format("d/m/Y");
    }