<?php

require_once '../Controller/relatoriosController.php';
require_once '../Objeto/relatorioKm.php';

use Controller\RelatorioController;
use Objeto\RelatorioDeKm;

$buscarDados = new RelatorioController();
$buscarId = new RelatorioDeKm();

$buscarId->setIdKm($_GET["idKm"]);

$busca = $buscarDados->buscarId($buscarId);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar o formulario de Km</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center full-height custom-bg">
        <div class="border p-4 rounded shadow-sm custom-width">

            <form action="../Controller/editarRelatorio.php" method="POST" class="custom-width">
                <h1 class="text-center mb-4">Atualizar o formulario de Km</h1>

                <input type="hidden" name="idKm" value="<?php echo $busca["idKm"]; ?>">

                <div class="form-group">
                    <label>Data</label>
                    <input type="date" class="form-control" id="data" name="data" value="<?php echo $busca["data"]; ?>" required>
                </div>

                <div class="form-group">
                    <label>Local 1:</label>
                    <input type="text" class="form-control" id="localUm" name="localUm" value="<?php echo $busca["localUm"]; ?>" required>
                </div>

                <div class="form-group">
                    <label>Local 2:</label>
                    <input type="text" class="form-control" id="localDois" name="localDois" value="<?php echo $busca["localDois"]; ?>" required>
                </div>

                <div class="form-group">
                    <label>Quantidade de km:</label>
                    <input type="text" class="form-control" id="qtdKm" name="qtdKm" value="<?php echo $busca["qtdKm"]; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary  w-100">Atualizar</button><br><br>

                <a href="home.php" class="btn btn-primary  w-100">Dashboard</a>




            </form>
        </div>






        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

</body>

</html>