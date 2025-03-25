<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Relatório</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center full-height custom-bg">
        <div class="border p-4 rounded shadow-sm custom-width">
            <form action="../Controller/gerarRelatorio.php" method="POST" class="custom-width">
                <h1 class="text-center mb-4">Gerar Relatório</h1>

                <div class="container d-flex flex-column align-items-center">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="data" class="col-form-label">Data Início</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" name="data" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-auto">
                            <label for="dataFinal" class="col-form-label">Data Final</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" name="dataFinal" class="form-control">
                        </div>
                    </div>
                </div><br>

                <button type="submit" class="btn btn-primary  w-100">Gerar Relatório</button><br><br>

                <a href="home.php" class="btn btn-primary  w-100">Dashboard</a>

            </form>

        </div>
    </div>














</body>

</html>