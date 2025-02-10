<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Km</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center full-height custom-bg">
        <div class="border p-4 rounded shadow-sm custom-width">

            <form action="Controller/cadastroRelatorioKm.php" method="POST" class="custom-width">
                <h1 class="text-center mb-4">Fomulario de KM</h1>
                <div class="form-group">
                    <label>Data</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>

                <div class="form-group">
                    <label>Local 1:</label>
                    <input type="text" class="form-control" id="localUm" name="localUm" required>
                </div>

                <div class="form-group">
                    <label>Local 2:</label>
                    <input type="text" class="form-control" id="localDois" name="localDois" required>
                </div>

                <div class="form-group">
                    <label>Quantidade de km:</label>
                    <input type="text" class="form-control" id="qtdKm" name="qtdKm" required>
                </div>

                <button type="submit" class="btn btn-primary  w-100">Guarda</button><br><br>

                <a href="home.php" class="btn btn-primary  w-100">Dashboard</a>




            </form>
        </div>






        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

</body>

</html>