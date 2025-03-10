<?php

namespace Service;

require_once '../Model/repositoryRelatorio.php';
require_once '../Model/repositoryUsuario.php';

use Model\UsuarioRepository;
use Model\RelatorioRepository;


class Fachada
{
    public function inserirRelatorio($dadosFormulario)
    {
        $repository = new RelatorioRepository();
        return $repository->inserirRelatorio($dadosFormulario);
    }

    public function atualizarRelatorio($dadosFormulario)
    {
        $repository = new RelatorioRepository();
        return $repository->atualizarRelatorio($dadosFormulario);
    }

    public function buscarRelatorio($data)
    {
        $repository = new RelatorioRepository();
        return $repository->buscarRelatorio($data);
    }

    public function buscarId($dadosFormulario)
    {

        $repository = new RelatorioRepository();
        return $repository->buscarId($dadosFormulario);
    }

    public function deleteRelatorio($dadosFormulario)
    {

        $repository = new RelatorioRepository();
        return $repository->deleteRelatorio($dadosFormulario);
    }

    //Usuario

    public function inserirUsuario($usuario)
    {
        $repository = new UsuarioRepository();
        return $repository->inserirUsuario($usuario);
    }

    public function buscarEmail($email)
    {
        $repository = new UsuarioRepository();
        return $repository->buscarEmail($email);
    }

    public function buscarLogin($login)
    {
        
        $repository = new UsuarioRepository();
        return $repository->buscarLogin($login);
    }
}
