<?php 
session_start();
include "../PHP/conexao.php";
include "../PHP/Listas/lista_fornecedores.php";

function formatCnpj($cnpj) {
  return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cnpj);
}

function formatPhone($phone) {
  return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $phone);
}

function formatCep($cep) {
  return preg_replace('/(\d{5})(\d{3})/', '$1-$2', $cep);
}
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
    <link rel="stylesheet" type="text/css" href="../css/styleinputs.css">
    <link rel="stylesheet" type="text/css" href="../css/style_tabela.css">
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
              <a href="../html_cadastros/cadastrar_produtos.html">Cadastrar Produto</a>
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
              <a href="../html_cadastros/cadastrar_produtos.html">Cadastrar Funcionários</a>
              <a href="#">Lista de Funcionários</a>
            </div>
          </div>
          <div class="menu-item">
            <button>
              Gestão de Fornecedores
              <i class="ri-arrow-down-s-line"></i>
            </button>
            <div class="submenu">
              <a href="../html_cadastros/cadastrar_fornecedor.html">Cadastrar Fornecedores</a>
              <a href="#">Lista de Fornecedores</a>
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
    <h1>Lista de Fornecedores</h1>
    <div class="tabela-container">
        <table class="tabela_fornecedor">
            <thead>
                <tr>
                    <th>Nome Fornecedor</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CEP</th>
                    <th>Rua</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_fornecedores as $fornecedores) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($fornecedores['nome_fornecedor']); ?></td>
                    <td><?php echo formatCnpj($fornecedores['CNPJ']); ?></td>
                    <td><?php echo formatPhone($fornecedores['telefone']); ?></td>
                    <td><?php echo htmlspecialchars(substr($fornecedores['email'], 0, 15)) . '...'; ?></td>
                    <td><?php echo formatCep($fornecedores['cep']); ?></td>
                    <td><?php echo htmlspecialchars($fornecedores['rua']); ?></td>
                    <td><?php echo htmlspecialchars($fornecedores['numero']); ?></td>
                    <td><?php echo htmlspecialchars($fornecedores['bairro']); ?></td>
                    <td><?php echo htmlspecialchars($fornecedores['cidade']); ?></td>
                    <td><?php echo htmlspecialchars($fornecedores['UF']); ?></td>
                    <td>
                        <i class="ri-edit-line"></i>
                        <i class="ri-close-circle-line"></i>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
