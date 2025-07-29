<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
  <link rel="stylesheet" href="../css/styleinputs.css">
  <title>Cadastrar Funcionário</title>
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
          <a href="#">Cadastrar Fornecedores</a>
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
    <form action="../PHP/funcionario.php" method="post">
      <h1>Cadastrar Funcionário</h1>

      <div class="inputs-lado-a-lado">
        <div class="input-group">
          <i class="ri-user-3-line"></i>
          <label for="nome_funcionario" class="label">Nome</label>
          <input name="nome_funcionario" type="text" class="input" id="nome_funcionario" placeholder="Nome completo">
        </div>


        <div class="input-group">
          <i class="ri-file-user-line"></i>
          <label for="cpf" class="label">CPF</label>
          <input name="CPF" type="text" class="input" id="cpf" placeholder="Digite o CPF" maxlength="20">
        </div>

        <div class="input-group">
          <i class="ri-mail-line"></i>
          <label for="email" class="label">Email</label>
          <input name="email" type="email" class="input" id="email" placeholder="Digite o email">
        </div>

        <div class="input-group">
          <i class="ri-map-pin-line"></i>
          <label for="cep" class="label">CEP</label>
          <input class="input" type="text" name="cep" id='cep' maxlength="9" oninput="formatCEP(this)"
            onblur="buscarCEP(this.value)" required>
          <button type="button" class="btn-cep-inside"
            onclick="buscarCEP(document.getElementById('cep').value)"> <i class="ri-search-line"></i></button>
        </div>

        <div class="input-group">
          <i class="ri-road-map-line"></i>
          <label for="rua" class="label">Rua</label>
          <input name="rua" type="text" class="input" id="rua" placeholder="Insira a rua">
        </div>

        <div class="input-group">
          <i class="ri-home-2-line"></i>
          <label for="numero" class="label">Número</label>
          <input name="numero" type="number" class="input" id="numero" placeholder="Número da residência">
        </div>

        <div class="input-group">
          <i class="ri-phone-line"></i>
          <label for="telefone" class="label">Telefone</label>
          <input name="telefone" type="tel" class="input" id="telefone" placeholder="Digite o telefone" maxlength="20">
        </div>

        <div class="input-group">
          <i class="ri-community-line"></i>
          <label for="bairro" class="label">Bairro</label>
          <input name="bairro" type="text" class="input" id="bairro" placeholder="Insira o bairro">
        </div>

        <div class="input-group">
          <i class="ri-building-line"></i>
          <label for="cidade" class="label">Cidade</label>
          <input name="cidade" type="text" class="input" id="cidade" placeholder="Insira a cidade">
        </div>

        <div class="input-group">
          <i class="ri-flag-line"></i>
          <label for="uf" class="label">UF</label>
          <select id="uf" name="UF" class="input">
            <option selected>Escolha o Estado</option>
            <option>SC</option>
          </select>
        </div>

        <div class="input-group">
          <i class="ri-calendar-line"></i>
          <label for="data_admissao" class="label">Data de Admissão</label>
          <input name="data_admissao" type="date" class="input" id="data_admissao">
        </div>

        <div class="input-group">
          <i class="ri-money-dollar-circle-line"></i>
          <label for="salario" class="label">Salário</label>
          <input name="salario" type="number" step="0.01" class="input" id="salario" placeholder="R$ 0,00">
        </div>
      <!--   <div class="input-group">
          <i class="ri-user-3-line"></i>
          <label class="label">Gênero</label>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="genero" value="masculino"> Masculino
            </label>
            <label class="radio-label">
              <input type="radio" name="genero" value="feminino"> Feminino
            </label>
            <label class="radio-label">
              <input type="radio" name="genero" value="outro"> Outro
            </label>
            <label class="radio-label">
              <input type="radio" name="genero" value="prefiro_nao_dizer"> Prefiro não dizer
            </label>
          </div>
        </div>-->

        <div class="input-group">
          <i class="ri-id-card-line"></i>
          <label for="id_funcao" class="label"> Função</label>
          <select name="id_funcao" class="input" id="id_funcao">
            <option selected>Selecione a Função</option>
             <?php
            require_once("../PHP/conexao.php");
            $query = "SELECT id_funcao, nome_funcao FROM funcao";
              $result = $conn->query($query);
              while ($row = $result->fetch_assoc()) {
             echo "<option value='" . $row['id_funcao'] . "'>" . $row['nome_funcao'] . "</option>";
            }
         ?>
        </select>
        </div>
       <!-- <div class="input-group">
          <i class="ri-user-settings-line"></i>
          <label for="id_usuario" class="label">ID Usuário</label>
          <input name="id_usuario" type="number" class="input" id="id_usuario" placeholder="Informe o ID do usuário">
        </div>
      </div> -->
      <div>
        <button type="submit" class="botao-style">Cadastrar Funcionário</button>
      </div>
    </form>

    <div>
      <img class="background" src="../img/fundo1.jpg" alt="Background Image">
    </div>
  </div>
</body>
</html>
