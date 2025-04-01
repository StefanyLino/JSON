<?php
// Converte arquivo JSON - PHP
$dados = json_decode(file_get_contents("carro.json"),true);


// Verifica se a conversão de JSON - PHP foi bem sucedida 
if(!is_array($dados)){
    $dados = [];
}

// Pega informações dentro dos inputs
$novoDado = [
    // Recebe tudo o que foi postado no devido input
    "nome" => $_POST["nome"],
    "valor" => $_POST["valor"],
    "ano" => $_POST["ano"]
];

$dados [] = $novoDado;

// Converte PHP - JSON
file_put_contents("carro.json" , json_encode($dados, JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso!";
header("refresh:2;url=index.php");

?>