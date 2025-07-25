<?php 
session_start();
include "../PHP/conexao.php";

$lista_fornecedores = buscar_tarefas($conn); 

if(isset($_POST['nome_fornecedor']) && $_POST['nome_fornecedor'] != '') {
   $fornecedores = array();

   $fornecedores['nome_fornecedor'] = $_POST['nome_fornecedor']; 
   $fornecedores['CNPJ'] = $_POST['CNPJ'] ?? '';
   $fornecedores['telefone'] = $_POST['telefone'] ?? '';
   $fornecedores['email'] = $_POST['email'] ?? '';
   $fornecedores['CEP'] = $_POST['cep'] ?? '';
   $fornecedores['rua'] = $_POST['rua'] ?? '';
   $fornecedores['numero'] = $_POST['numero'] ?? ''; 
   $fornecedores['bairro'] = $_POST['bairro'] ?? '';
   $fornecedores['cidade'] = $_POST['cidade'] ?? '';
   $fornecedores['UF'] = $_POST['UF'] ?? '';
}

function buscar_tarefas($conn) {
  $sqlBusca = 'SELECT * FROM fornecedores';
  $resultado = mysqli_query($conn, $sqlBusca);
  $lista = array();
  while ($fornecedores = mysqli_fetch_assoc($resultado)) {
      $lista[] = $fornecedores; 
  }
  return $lista;
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
        <table style="border-bottom: 1px solid #333;" class="tabela_fornecedor">
        <tr>
            <th>Nome do Fornecedor</th>
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

        <?php foreach ($lista_fornecedores as $fornecedores) : ?>
        <tr>
           <td><?php echo $fornecedores['nome_fornecedor']; ?></td>
           <td><?php echo $fornecedores['CNPJ']; ?></td>
           <td><?php echo $fornecedores['telefone']; ?></td>
           <td><?php echo $fornecedores['email']; ?></td>
           <td><?php echo $fornecedores['cep']; ?></td>
           <td><?php echo $fornecedores['rua']; ?></td>
           <td><?php echo $fornecedores['numero']; ?></td>
           <td><?php echo $fornecedores['bairro']; ?></td>
           <td><?php echo $fornecedores['cidade']; ?></td>
           <td><?php echo $fornecedores['UF']; ?></td>
           <td>Editar / Inativar</td>
        </tr>
            <?php endforeach; ?>
        </table>
      </div>
  </div>
</body>
</html>
