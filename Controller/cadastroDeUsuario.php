<?php

namespace Controller;
// var_dump($_POST);
// exit;
require_once '../Service/fachada.php';
require_once '../Objeto/usuario.php';

use Service\Fachada;
use Objeto\Usuario;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = new Usuario();

    $usuario->setNome($_POST['nome'] ?? '');
    $usuario->setEmail($_POST['email'] ?? '');
    $usuario->setSenha($_POST['senha'] ?? '');
}
$cadastro = new CadastroDeUsuario();
$cadastro->inserirUsuario($usuario);

class CadastroDeUsuario
{
    private $fachada;

    public function __construct()
    {
        $this->fachada = new Fachada();
    }

    public function inserirUsuario($usuario)
    {
        $facade = $this->fachada->inserirUsuario($usuario);

        if (isset($facade)) {
            echo 'Usuario cadastrado com sucesso';
        } else {
            echo 'Usuario não cadastrado';
        }
        echo "<br><br><a href='../index.php'>Voltar ao login</a>";
        return $facade;
    }
}
