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

        $this->con = $db;
    }

    public function inserirRelatorio($dado)
    {
        return [
            'status' => 'sucesso',
            'mensagem' => 'Relatório salvo com sucesso!',
        ];
    }
}