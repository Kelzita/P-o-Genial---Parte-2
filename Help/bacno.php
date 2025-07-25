<?php 
$bdServidor = '127.0.0.1'; //localhost:8080
$bdUsuario = 'root'; // usuario do banco
$bdSenha = '';  // senha, geralmente vazia
$BdBanco = 'raquel_fernandes'; // nome do banco a se conectar 

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $BdBanco); //conexao
if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco verifique os dados!";
    die();
}  


function buscar_tarefas($conexao) {
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $tarefas = array();
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa; 
        
    }
    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa) {
    $sqlGravar = "INSERT INTO tarefas (nome, descricao,prioridade, prazo, concluida) VALUES (
    '{$tarefa['nome']}', 
    '{$tarefa['descricao']}',
    '{$tarefa['prioridade']}',
    '{$tarefa['prazo']}',
    '{$tarefa['concluida']}'
    )
    ";
    mysqli_query($conexao,$sqlGravar);
    }
?>
table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    background-color: #1c1c1c; /* preto fosco */
    color: #f0f0f0; /* texto claro neutro */
}

thead {
    background-color: #2b2b2b; /* cinza escuro */
    text-transform: uppercase;
}

th, td {
    padding: 12px 16px;
    text-align: left;
    border-bottom: 1px solid #333;
}

tr:hover {
    background-color: #2e2e2e; /* leve destaque ao passar o mouse */
    transition: background 0.2s ease-in-out;
}

th {
    font-weight: bold;
    color: #ffffff;
}

td {
    font-size: 14px;
}

/* Responsivo para telas pequenas */
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead {
        display: none;
    }

    tr {
        margin-bottom: 15px;
        border: 1px solid #333;
        padding: 10px;
    }

    td {
        position: relative;
        padding-left: 50%;
        text-align: right;
    }

    td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        top: 12px;
        font-weight: bold;
        text-transform: uppercase;
        color: #bbb;
        text-align: left;
    }
}
