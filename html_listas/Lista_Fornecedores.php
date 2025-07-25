
<?php 
session_start();
include "../PHP/conexao.php";
include "../PHP/lista_fornecedores-consulta.php";
?>
<!DOCTYPE html>
<html lang="PR-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css" href="../css/stylelista.css"></style>
  
  <title>Lista de Fornecedores</title>
</head>
<body>
<div class="principal">
    <h1>Lista de Fornecedores</h1>
    <div class="tabela-container">
      <table class="tabela-fornecedores">
        <thead>
          <tr>
            <th>Fornecedor</th>
            <th>CNPJ</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista_fornecedores as $resultado) : ?>
          <tr>
            <td><?php echo $resultado['nome_fornecedor']?></td>
            <td><?php echo $resultado['CNPJ']?></td>
            <td><?php echo $resultado['telefone']?></td>
            <td><?php echo $resultado['email']?></td>
            <td><?php echo $resultado['CEP']?></td>
            <td><?php echo $resultado['rua']?></td>
            <td><?php echo $resultado['numero']?></td>
            <td><?php echo $resultado['bairro']?></td>
            <td><?php echo $resultado['cidade']?></td>
            <td><?php echo $resultado['UF']?></td>
            <td>
              <button class="acao editar"><i class="ri-edit-line"></i></button>
              <button class="acao excluir"><i class="ri-delete-bin-line"></i></button>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  
    <div>
      <img class="background" src="../img/fundo1.jpg" alt="Background Image">
    </div>
  </div>
</body>
</html>
