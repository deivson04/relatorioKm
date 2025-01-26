<?php

require_once '../Controller/relatoriosController.php';

use Controller\RelatorioController;

$buscarRelatorio = new RelatorioController();

$buscar = $buscarRelatorio->buscarRelatorio($_GET);
// print_r($buscar);



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid d-flex flex-column align-items-center mt-3">
        <h1 class="mb-3">Relatório de KM</h1>
        <a href="../index.php" class="btn btn-primary">Registra km</a>
    </div>

    <div class="container">
        <table class="table table-striped table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Deslocamento one</th>
                    <th scope="col">Deslocamento two</th>
                    <th scope="col">QtdKm</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buscar as $dados) : ?>
                    <tr>
                        <th><?= $dados['localUm']; ?></th>
                        <td><?= $dados['localDois']; ?></td>
                        <td><?= $dados['qtdKm']; ?></td>
                        <td><?= $dados['data']; ?></td>
                        <td><a href="atualizar.php?idKm=<?= $dados['idKm']; ?>" class="btn btn-primary">Atualizar</a></td>
                        <td><a href="deletar.php?idKm=<?= $dados['idKm']; ?>" class="btn btn-danger">Deletar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>






        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

</body>

</html>