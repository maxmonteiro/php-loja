<?php include('cabecalho.php'); ?>
    <h1>Formulário de produto</h1>
    <form action="adiciona-produto.php">
        Nome:
        <input type="text" name="nome">
        <br>
        Preço:
        <input type="text" name="preco">
        <br>
        <button type="submit">Cadastrar</button>
    </form>
<?php include('rodape.php'); ?>