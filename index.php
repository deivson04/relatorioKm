<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center full-height custom-bg">
        <div class="border p-4 rounded shadow-sm custom-width">

            <form action="Controller/cadastroRelatorioKm.php" method="POST" class="custom-width">
                <h1 class="text-center mb-4">Login</h1>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>senha:</label>
                    <input type="text" class="form-control" id="senha" name="senha" required>
                </div>

                <button type="submit" class="btn btn-primary  w-100">Entrar</button><br><br>

            <p class="form-text mt-3">Ainda não tem uma conta? <a href="view/formularioDeUsuario.php">Cadastre-se aqui</a></p>




            </form>
        </div>






        <script src="view/js/bootstrap.min.js"></script>
        <script src="view/js/script.js"></script>

</body>

</html>