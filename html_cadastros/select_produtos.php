<?php
require_once("conexao.php");

$query = "SELECT id_fornecedor, nome_fornecedor FROM fornecedores";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['id_fornecedor'] . "'>" . $row['nome_fornecedor'] . "</option>";
}
$conn->close();
?>
