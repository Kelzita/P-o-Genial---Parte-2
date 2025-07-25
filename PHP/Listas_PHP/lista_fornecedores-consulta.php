<?php session_start();
include "../PHP/conexao.php"; 

if(isset($_POST['nome_fornecedor']) && $_GET['nome_fornecedor'] != '') {
    $resultado = array();
    $resultado['nome_fornecedor'] = $_POST['nome_fornecedor'];


//CNPJ 
    if(isset($_POST['CNPJ'])) {
    $resultado['CNPJ'] = $_POST['CNPJ'];
}else {
    $resultado['CNPJ'] = '';
}

//TELEFONE
if(isset($_POST['telefone'])) {
    $resultado['telefone'] = $_POST['telefone'];
}else {
    $resultado['telefone'] = '';
}

// EMAIL
if(isset($_POST['email'])) {
    $resultado['email'] = $_POST['email'];
}else {
    $resultado['email'] = '';
}

//CEP
if(isset($_POST['CEP'])) {
    $resultado['CEP'] = $_POST['CEP'];
}else {
    $resultado['CEP'] = '';
}

// RUA
if(isset($_POST['rua'])) {
    $resultado['rua'] = $_POST['rua'];
}else {
    $resultado['rua'] = '';
}

//NUMERO
if(isset($_POST['numero'])) {
    $resultado['numero'] = $_POST['numero'];
}else {
    $resultado['numero'] = '';
}

//BAIRRO
if(isset($_POST['bairro'])) {
    $resultado['bairro'] = $_POST['bairro'];
}else {
    $resultado['bairro'] = '';
}

//CIDADE
if(isset($_POST['cidade'])) {
    $resultado['cidade'] = $_POST['cidade'];
}else {
    $resultado['cidade'] = '';
}

//UF
if(isset($_POST['UF'])) {
    $resultado['UF'] = $_POST['UF'];
}else {
    $resultado['UF'] = '';
}
}
$lista_fornecedores = buscar_fornecedores($conn);

function buscar_fornecedores($conn) {
    $sqlBusca = 'SELECT * FROM fornecedores';
    $resultados = mysqli_query($conn, $sqlBusca);
    $resultado1 = array();
    while ($resultado = mysqli_fetch_assoc($resultados)) {
        $resultado1[] = $resultado;
    }
    return $resultado1
}
?>
