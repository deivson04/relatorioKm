<?php

namespace Controller;

require_once '../Service/fachada.php';

use Service\Fachada;

class RelatorioController
{
    private $fachada;

    public function __construct()
    {
        $this->fachada = new Fachada();
    }

    public function buscarRelatorio($data)
    {
        return $this->fachada->buscarRelatorio($data);
    }

    public function buscarId($dadosFormulario)
    {
        return $this->fachada->buscarId($dadosFormulario);
    }

}