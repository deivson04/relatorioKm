<?php

require_once '../Controller/relatoriosController.php';

use Controller\RelatorioController;

$buscarRelatorio = new RelatorioController();

$buscar = $buscarRelatorio->buscarRelatorio($_GET);


$dataInicio = $buscarRelatorio->dataInicio($_GET);


  


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
        <div class="d-flex">
            <a href="../index.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover custom-font custom-spacing">Registra km</a>
            <a href="gerarKm.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover custom-font">Gerar km</a>
        </div>
    </div>

    <form  class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="date" name="dataInicio" value="<?= isset($_GET['dataInicio']) ? $_GET['dataInicio'] : date('Y-m-d') ?>" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>

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
                        <td><?= date('d/m/Y',  strtotime($dados['data'])); ?></td>
                        <td><a href="atualizar.php?idKm=<?= $dados['idKm']; ?>" class="btn btn-primary">Atualizar</a></td>
                        <td><a href="../Controller/deleteRelatorio.php?idKm=<?= $dados['idKm']; ?>" class="btn btn-danger">Deletar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>






        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

</body>

</html>