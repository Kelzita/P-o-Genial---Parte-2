
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
  <link rel="stylesheet" href="../css/styleinputs.css">
  <title>Cadastrar Produto</title>
</head>

<body>
  <div class="lateral">
    <div class="perfil">
      <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Perfil">
    </div>

    <div class="menu">
      <div class="menu-item">
        <button>Histórico de Vendas</button>
      </div>

      <div class="menu-item">
        <button>
          Gestão de Produtos e Estoque
          <i class="ri-arrow-down-s-line"></i>
        </button>
        <div class="submenu">
          <a href="#">Cadastrar Produto</a>
          <a href="#">Estoque Atual</a>
          <a href="#">Gerenciar Produtos</a>
        </div>
      </div>

      <div class="menu-item">
        <button>
          Gestão de Funcionários
          <i class="ri-arrow-down-s-line"></i>
        </button>
        <div class="submenu">
          <a href="#">Cadastrar Funcionários</a>
          <a href="#">Lista de Funcionários</a>
        </div>
      </div>

      <div class="menu-item">
        <button>
          Gestão de Fornecedores
          <i class="ri-arrow-down-s-line"></i>
        </button>
        <div class="submenu">
          <a href="cadastrar_fornecedores.html">Cadastrar Fornecedores</a>
          <a href="../html_listas/Lista_Fornecedores.php">Lista de Fornecedores</a>
        </div>
      </div>

      <div class="menu-item">
        <button>Relatório de Vendas</button>
      </div>

      <div class="menu-item">
        <button>Caixa</button>
      </div>

      <div class="menu-item">
        <button>Comanda</button>
      </div>

      <div class="logout">
        <button>
          <i class="ri-logout-box-r-line"></i>
          Sair
        </button>
      </div>
    </div>
  </div>

  <div class="principal">
    <form action="../PHP/produtos.php" method="post">
      <h1>Cadastrar Produto</h1>

      <div class="inputs-lado-a-lado">
        <div class="input-group">
          <i class="ri-barcode-box-line"></i>
          <label for="nome_produto" class="label">Nome do Produto</label>
          <input name="nome_produto" type="text" class="input" id="nome_produto" placeholder="Insira o nome do produto">
        </div>

        <div class="input-group">
          <i class="ri-money-dollar-box-line"></i>
          <label for="preco" class="label">Preço</label>
          <input name="preco" type="number" step="0.01" class="input" id="preco" placeholder="R$ 0,00">
        </div>

        <div class="input-group">
          <i class="ri-shape-2-line"></i>
          <label for="unmedida" class="label">Unidade de Medida</label>
          <input name="unmedida" type="text" class="input" id="unmedida" placeholder="Ex: Kg, un, L">
        </div>

        <div class="input-group">
          <i class="ri-calendar-line"></i>
          <label for="validade" class="label">Validade</label>
          <input name="validade" type="date" class="input" id="validade">
        </div>

        <div class="input-group">
          <i class="ri-truck-line"></i>
          <label for="id_fornecedor" class="label">Fornecedor</label>
          <select name="id_fornecedor" id="id_fornecedor" class="select-estilizado" required>
            <option value="">Selecione o fornecedor</option>
            <?php
              require_once("../PHP/conexao.php");
              $query = "SELECT id_fornecedor, nome_fornecedor FROM fornecedores";
              $result = $conn->query($query);
              while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id_fornecedor'] . "'>" . $row['nome_fornecedor'] . "</option>";
              }
            ?>
          </select>

        </div>
        <div class="input-group">
  <i class="ri-stack-line"></i>
  <label for="id_estoque" class="label">Estoque</label>
  <select name="id_estoque" id="id_estoque" class="select-estilizado" required>
    <option value="1">1</option>

  </select>
</div>
      </div>

      <div>
        <button type="submit" class="botao-style">Cadastrar Produto</button>
      </div>
    </form>

    <div>
      <img class="background" src="../img/fundo1.jpg" alt="Background Image">
    </div>
  </div>
</body>

</html>
