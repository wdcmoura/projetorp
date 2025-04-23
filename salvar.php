<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $quantidade = $_POST["quantidade"];
    $curso = $_POST["curso"];

    $dados = "Nome: $nome\nCPF: $cpf\nRG: $rg\nQuantidade: $quantidade\nCurso: $curso\n----------------------\n";

    $arquivo = "base_de_dados.txt";

    file_put_contents($arquivo, $dados, FILE_APPEND);

    echo "Dados salvos com sucesso!";
}
?>
