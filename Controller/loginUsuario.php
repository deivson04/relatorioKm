<?php

namespace Controller;

session_start();
// echo '<pre>';
// var_dump($_SESSION);
// die;
require_once __DIR__ . '/../Service/fachada.php';
require_once '../Objeto/usuario.php';

use Service\Fachada;
use Objeto\Usuario;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = new Usuario();

    $usuario->setEmail($_POST['email'] ?? '');
    $usuario->setSenha($_POST['senha'] ?? '');


    $fachada = new Fachada();

    $login = $fachada->buscarLogin($usuario);

    if ($login) {
        $_SESSION['idUsuario'] = $login['idUsuario'];
        $_SESSION['email'] = $login['email'];
        $_SESSION['nome'] = $login['nome'];

        header("Location: ../view/home.php");
        exit;
    } else {
        echo "Email ou senha incorretos!";
    }

    echo "<br><br><a href='../index.php'>Voltar ao login</a>";
}
