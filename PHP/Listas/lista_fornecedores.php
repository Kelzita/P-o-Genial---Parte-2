<?php 
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
