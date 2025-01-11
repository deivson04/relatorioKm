<?php

namespace Model;

require_once 'conexao.php';

use Model\ConexaoDB;

class RelatorioRepository 
{
    protected $con;

    public function __construct()
    {
        $db = new ConexaoDB();

        $this->con = $db->conectarBanco();
    }

    public function inserirRelatorio($dado)
    {
        $obj = $dado->getLocalUm();
        $obj = $dado->getLocalDois();
        $obj = $dado->getQtdKm();
        $obj = $dado->getData();
        
        
        echo '<pre>';

        //print_r($obj);
        return [
            'status' => 'sucesso',
            'mensagem' => 'Relatório salvo com sucesso!',
        ];
    }
}