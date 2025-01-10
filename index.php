<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center full-height">

        <form action="controller/cadastroRelatorioKm.php" method="POST" class="custom-width">
            <h1>Fomulario de KM:</h1>
            <div class="form-group">
                <label>Data</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>

            <div class="form-group">
                <label>Local 1:</label>
                <input type="text" class="form-control" id="localUm" name="localUm">
            </div>

            <div class="form-group">
                <label>Local 2:</label>
                <input type="text" class="form-control" id="localDois" name="localDois">
            </div>

            <div class="form-group">
                <label>Quantidade de km:</label>
                <input type="text" class="form-control" id="qtdKm" name="qtdKm">
            </div>

            <button type="submit" class="btn btn-primary">Guarda</button>
           
            
           
        </form>
    </div>






    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>

