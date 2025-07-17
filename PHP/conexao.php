<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'padaria_pao_genial';
$port = '3306';

$conn = mysqli_connect($host,$user,$pass,$database,$port); 

if ($!conn) {
    die("Erro ao conectar ao banco!");
}

?>