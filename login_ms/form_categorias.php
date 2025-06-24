<?php
require 'protecao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar categorias</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <form action="cadastrar_categorias.php" method='POST'>
        <h1>criar categorias</h1>
        <label for="nome">nome:</label>
        <input type="text" name='nome' id='nome'>

        <label for="descricao">descrição:</label>
        <input type="text" name='descricao' id='descricao'>

        <input type="submit" value='salvar'>
    </form>
</body>
</html>