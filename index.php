<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulário em JSON</title>
</head>
<body>
    <div class="container">
            <h2>Cadastro de Usuários</h2>
            <form action="salvar.php" method="post">
                Nome: <input type="text" name="nome" required> <br><br>
                Idade: <input type="number" name="idade" required> <br><br>
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </form>
    </div>

</body>
</html>