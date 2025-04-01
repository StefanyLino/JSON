<!-- 1. FILE_GET_CONTENTS (”Dados.JSON”) - Lê o conteúdo do arquivo JSON.
2. JSON_DECODE (…,TRUE) - Converte o JSON para um um array em PHP.
3. IS_ARRAY ($DADOS) - Garante que $DADOS seja um array válido.
4. $_POST [”NOME”] e $POST [”IDADE”] - Captura dados do formulário.
5. $DADOS[ ] = $novoDado - Adiciona o novo dado a um array existente.
6. JSON_ENCODE ($DADOS, JSON_PRETTY_PRINT) - Converter o array PHP de volta para o formato JSON.
7. FILE_PUT_CONTENTS(”DADOS.JSON”,…) - Salva o novo JSON no arquivo. -->

<?php
// Converte arquivo JSON - PHP
$dados = json_decode(file_get_contents("dados.json"),true);


// Verifica se a conversão de JSON - PHP foi bem sucedida 
if(!is_array($dados)){
    $dados = [];
}

// Pega informações dentro dos inputs
$novoDado = [
    // Recebe tudo o que foi postado no devido input
    "nome" => $_POST["nome"],
    "idade" => $_POST["idade"]
];

$dados [] = $novoDado;

// Converte PHP - JSON
file_put_contents("dados.json" , json_encode($dados, JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso! <a href='index.php'>Voltar</a>";

// Dados salvos no arquivo JSON a partir 


?>