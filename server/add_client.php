<?php
include('../db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Armazena a senha criptografada
    $endereco = $_POST['endereco'];
    
    // Prepara a query de inserção
    $stmt = $conn->prepare("INSERT INTO clientes (nome, email, senha, endereco) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $senha, $endereco); // "ssss" indica que todos os parâmetros são do tipo string (VARCHAR)
   
    // Executa a query e verifica se foi bem-sucedida
    if ($stmt->execute()) {
        // Notificação de sucesso
        echo "<script type='text/javascript'>
                alert('Cadastro bem sucedido!');
                window.location.href = '../exibicao.php'; // Redireciona para exibição
              </script>";
    } else {
        echo "Erro ao cadastrar produto: " . $conn->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>