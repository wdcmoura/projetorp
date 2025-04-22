<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $recebeu_cesta = $_POST['recebeu_cesta'];

    // Cria a string para salvar no arquivo
    $linha = "Nome: $nome | Endereço: $endereco | Telefone: $telefone | Gênero: $genero | Recebeu cesta: $recebeu_cesta\n";

    // Define o caminho do arquivo onde os dados serão salvos
    $arquivo = 'cadastros.txt';

    // Abre o arquivo e escreve a linha (adicionando no final)
    file_put_contents($arquivo, $linha, FILE_APPEND);

    // Exibe mensagem de sucesso ou redireciona
    echo "<p style='color:green;'>Cadastro realizado com sucesso!</p>";
} else {
    echo "<p style='color:red;'>Erro ao enviar o formulário.</p>";
}
?>
