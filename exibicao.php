<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png">
  <title>Exibição - AutoTec Solutions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background: linear-gradient(to bottom, #ff6e00, #202020);
      color: #fff;
    }
    .logo {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 1rem;
    }
    h1, h2 {
      color: #fd8a17;
    }
    table {
      color: #fff;
    }
    th {
      background-color: #444;
    }
    td {
      background-color: #2a2a2a;
    }
  </style>
</head>
<body>
  <!-- Menu -->
  <nav id="cssmenu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="cadastro.php">Cadastro</a></li>
      <li><a href="exibicao.php" class="active">Exibição Dados</a></li>
      <li><a href="contato.html">Contato</a></li>
    </ul>
  </nav>
  <div class="container mt-4">
    <div class="logo">
        <span class="text-warning">Exibição de Dados</span>
    </div>
  <!-- Conteúdo -->
  <div class="container mt-4">
    <h1>Dados Cadastrados</h1>

    <!-- Exibição de Produtos -->
    <section class="mt-4">
      <h2>Produtos</h2>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $conn->query("SELECT * FROM produtos");
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['nome']}</td>
                          <td>{$row['categoria']}</td>
                          <td>R$ {$row['preco']}</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='4'>Nenhum produto encontrado</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </section>

    <!-- Exibição de Categorias -->
    <section class="mt-4">
      <h2>Categorias</h2>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $conn->query("SELECT * FROM categorias");
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['nome']}</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='2'>Nenhuma categoria encontrada</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </section>

    <!-- Exibição de Clientes -->
    <section class="mt-4">
      <h2>Clientes</h2>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Endereço</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $conn->query("SELECT * FROM clientes");
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['nome']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['endereco']}</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='4'>Nenhum cliente encontrado</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
  </div>
</body>
</html>
