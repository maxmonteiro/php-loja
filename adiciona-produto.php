<?php include('cabecalho.php'); ?>
<?php
// criando função de inserção no banco
function insereProduto($conexao, $nome, $preco)
{
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    return mysqli_query($conexao, $query);
}

$nome = $_GET['nome'];
$preco = $_GET['preco'];
$conexao = mysqli_connect('localhost', 'root', 'root', 'phploja');
// query sql

// executa query
if (insereProduto($conexao, $nome, $preco)) { ?>
    <p class="text-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php 
} else { ?>
    <p class="text-danger">Produto <?= $nome ?> não foi adicionado!</p>
<?php 
}
?>
<?php include('rodape.php'); ?>