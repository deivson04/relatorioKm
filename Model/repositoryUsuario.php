<?php

namespace Model;

require_once 'conexao.php';

use Model\ConexaoDB;

use PDO;


class UsuarioRepository
{
    protected $con;

    public function __construct()
    {
        $db = new ConexaoDB();

        $this->con = $db->conectarBanco();
    }

    public function inserirUsuario($usuario)
    {
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUE (:nome, :email, :senha)";

        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);

        $stmt->execute();

        return $stmt;
    }
}
