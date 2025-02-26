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

    $fachada = new Fachada();
    $emailExistente = $fachada->buscarEmail($usuario->getEmail());

    if ($emailExistente) {

        echo 'Usuário já cadastrado com esse e-mail';
    } else {
        $cadastro = $fachada->inserirUsuario($usuario);

        if ($cadastro) {
            echo 'Usuário cadastrado com sucesso';
        } else {
            echo 'Usuário cadastrado';
        }
    }

    echo "<br><br><a href='../index.php'>Voltar ao login</a>";
}
