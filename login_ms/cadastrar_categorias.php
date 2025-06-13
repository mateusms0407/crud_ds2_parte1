<?php
    require_once 'conexao.php';

    if (isset($_POST['nome'])){
        $nome = $_POST['nome'];
    } else {
        $nome = null;
    }

    if (isset($_POST['descricao'])){
        $descricao = $_POST['descricao'];
    } else {
        $descricao = null;
    }


    $sql = "INSERT INTO categorias (nome, descricao) VALUES ( :nome,:descricao)";
    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':descricao', $descricao);

    $stmt->execute();
    
?>