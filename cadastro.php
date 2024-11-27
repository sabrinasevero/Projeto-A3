<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png">
  <title>Cadastro - AutoTec Solutions</title>
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
    .card-custom {
      background-color: #2a2a2a;
      border-radius: 10px;
      padding: 1rem;
    }
    h1, h2 {
      color: #fd8a17;
    }
    .form-label, .form-control {
      color: #fff;
    }
    .form-control {
      background-color: #444;
      border: none;
    }
    .form-control:focus {
      background-color: #555;
      border-color: #ff6e00;
      color: #fff;
    }
    
  </style>
</head>
<body>
  <!-- Menu -->
  <nav id="cssmenu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="cadastro.php" class="active">Cadastro</a></li>
      <li><a href="exibicao.php">Exibição Dados</a></li>
      <li><a href="contato.html">Contato</a></li>
    </ul>
  </nav>

  <!-- Conteúdo -->
  <div class="container mt-4">
    <div class="logo">
        <span class="text-warning">Cadastro</span>
    </div>
    <h1>Cadastro de Produtos, Categorias e Clientes</h1>

    <!-- Cadastro de Produtos -->
    <section class="mt-4">
      <h2>Cadastro de Produtos</h2>
      <form action="server/add_product.php" method="POST" class="card-custom">
        <div class="mb-3">
          <label for="nome-produto" class="form-label">Nome do Produto</label>
          <input type="text" id="nome-produto" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="categoria-produto" class="form-label">Categoria</label>
          <select id="categoria-produto" name="categoria" class="form-select">
            <option value="Controladores">Controladores</option>
            <option value="Medidores">Medidores</option>
            <option value="Termostatos">Termostatos</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="descricao-produto" class="form-label">Descrição</label>
          <textarea id="descricao-produto" name="descricao" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="preco-produto" class="form-label">Preço</label>
          <input type="number" id="preco-produto" name="preco" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-warning">Cadastrar Produto</button>
      </form>
    </section>

    <!-- Cadastro de Categorias -->
    <section class="mt-4">
      <h2>Cadastro de Categorias</h2>
      <form action="server/add_category.php" method="POST" class="card-custom">
        <div class="mb-3">
          <label for="nome-categoria" class="form-label">Nome da Categoria</label>
          <input type="text" id="nome-categoria" name="nome" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-warning">Cadastrar Categoria</button>
      </form>
    </section>

    <!-- Cadastro de Clientes -->
    <section class="mt-4">
      <h2>Cadastro de Clientes</h2>
      <form action="server/add_client.php" method="POST" class="card-custom">
        <div class="mb-3">
          <label for="nome-cliente" class="form-label">Nome do Cliente</label>
          <input type="text" id="nome-cliente" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email-cliente" class="form-label">E-mail</label>
          <input type="email" id="email-cliente" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="senha-cliente" class="form-label">Senha</label>
          <input type="password" id="senha-cliente" name="senha" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="endereco-cliente" class="form-label">Endereço</label>
          <textarea id="endereco-cliente" name="endereco" class="form-control" rows="2" required></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Cadastrar Cliente</button>
      </form>
    </section>
  </div>
</body>
</html>
