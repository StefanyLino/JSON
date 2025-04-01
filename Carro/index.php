<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Atividade Carro</title>
</head>
<body>
    <div class="container">
            <div class="container text-center">
                <h2>Cadastro de Carros</h2>
            </div>
            <form action="salvar.php" method="post">
                Nome: <input type="text" name="nome"  placeholder="Digite aqui..."> <br><br>
                Valor: <input type="number" name="valor"  placeholder="Digite aqui..."> <br><br>
                Ano: <input type="date" name="ano" required> <br><br>
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </form>

            <div class="container mt-4">
                <h2>Carros Cadastrados</h2>
                <ul>
                    <!-- Para mostrar dados JSON no meu PHP (tela) -->
                    <?php
                        $dados = json_decode(file_get_contents("carro.json"), true);
                        // ! = diferente
                        if(!empty ($dados)) {
                            foreach($dados as $usuario) {
                                echo "<li>{$usuario['nome']} -
                                R$ {$usuario['valor']} ano {$usuario['ano']} </li>";
                            }
                        } else {
                            echo " <li> Nenhum usuário cadastrado. </li>";
                        }
                    ?>
                </ul>
            </div>
    </div>
</body>
</html>

<!-- NOME, VALOR E ANO -->