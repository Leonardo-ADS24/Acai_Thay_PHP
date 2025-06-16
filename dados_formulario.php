<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $mensagem = isset($_POST['mensagem']) ? htmlspecialchars($_POST['mensagem']) : '';

    // Exibe os dados (ou processe como desejar)
    echo "<h1>Dados fo Formulário</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";

} else {
    echo "<p>Nenhum dado foi enviado.</p>";
}
?>