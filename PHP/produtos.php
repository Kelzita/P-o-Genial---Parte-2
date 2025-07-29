<?php 
require_once("conexao.php");
$id_fornecedor = $_POST['id_fornecedor'];
$id_estoque = $_POST['id_estoque'];
$nome_produto = $_POST['nome_produto'];
$preco = $_POST['preco'];
$unmedida = $_POST['unmedida'];
$validade = $_POST['validade'];  

$sql = "INSERT INTO produto (id_fornecedor, id_estoque, nome_produto, preco, unmedida, validade) 
        VALUES ('$id_fornecedor', '$id_estoque', '$nome_produto', '$preco', '$unmedida', '$validade')";

if($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Produto Cadastrado com Sucesso!')
    </script>";
} else {
    echo "<script>alert('Produto não cadastrado');</script>";
}

$conn->close();
?>
