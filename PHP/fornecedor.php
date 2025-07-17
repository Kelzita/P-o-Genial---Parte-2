<?php 
request_once("conexao.php");

$nome_fornecedor = $_POST['nome_fornecedor'];
$CNPJ = $_POST['CNPJ'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$CEP = $_POST['CEP'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$UF = $_POST['UF'];

$sql = "INSERT INTO fornecedores (nome_fornecedor, CNPJ, telefone, email, CEP, rua, numero, bairro, cidade, UF ) VALUES ( '$nome_fornecedor','$CNPJ','$telefone','$email','$CEP','$rua','$numero','$bairro','$cidade','$UF')";

if($conn->query($sql) === TRUE) {
    echo "<script>
       alert('Fornecedor Cadastrado com Sucesso!')
    </script>"
} else {

    echo "<script>alert('Fornecedor não cadastrado');</script>";

}

$conn->close();

?>