<?php include('cabecalho.php'); ?>
<?php
$nome = $_GET['nome'];
$preco = $_GET['preco'];
// Inserindo dados no banco
// abre conexao
$conexao = mysqli_connect('localhost', 'root', 'root', 'phploja');
// query sql
$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
// executa query
if (mysqli_query($conexao, $query)) { ?>
    <p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else { ?>
    <p class="alert-danger">Produto <?= $nome ?> não foi adicionado!</p>
<?php 
} 
?>
<?php include('rodape.php'); ?>