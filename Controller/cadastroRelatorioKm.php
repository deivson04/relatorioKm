<?php

namespace Controller;

require_once '../Service/fachada.php';

use Service\Fachada;

class CadastroRelatorioKm
{
    public function inserirRelatorio($dadosFormulario)
    {
        $objetoRelatorio = new Fachada();
        return $objetoRelatorio->inserirRelatorio($dadosFormulario);
    }
}

// Verificando se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pegando os dados do formulário via POST
    $dadosFormulario = [
        'data' => $_POST['data'] ?? '',
        'localUm' => $_POST['localUm'] ?? '',
        'localDois' => $_POST['localDois'] ?? '',
        'qtdKm' => $_POST['qtdKm'] ?? ''
    ];

    $cadastro = new CadastroRelatorioKm();
    $cadastro->inserirRelatorio($dadosFormulario);
} else {
    echo 'Metodo não permitido';
}

$objetoRelatorio = new Fachada();
$resultado = $objetoRelatorio->inserirRelatorio($dadosFormulario);

if ($resultado) {
    echo 'Relatório cadastrado com sucesso!';
} else {
    echo "Erro ao cadastrar o relatório. $resultado.";
}

echo "<br><br><a href='../index.php'>Voltar ao formulário</a>";
