<?php
include('../db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    // Prepara a query de inserção
    $stmt = $conn->prepare("INSERT INTO produtos (nome, categoria, descricao, preco) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $nome, $categoria, $descricao, $preco);

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
