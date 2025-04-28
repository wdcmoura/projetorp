<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $recebeu_cesta = $_POST['recebeu_cesta'];

    // Define o caminho do arquivo CSV
    $arquivo = 'cadastros.csv';

    // Abre o arquivo no modo append (adicionar)
    $fp = fopen($arquivo, 'a');

    if ($fp) {
        // Cria um array com os dados
        $dados = [$nome, $endereco, $telefone, $genero, $recebeu_cesta];

        // Escreve os dados no arquivo CSV
        fputcsv($fp, $dados);

        // Fecha o arquivo
        fclose($fp);

        // Exibe mensagem de sucesso
        echo "<p style='color:green;'>Cadastro realizado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro ao abrir o arquivo para salvar.</p>";
    }
} else {
    echo "<p style='color:red;'>Erro ao enviar o formulário.</p>";
}
?>
