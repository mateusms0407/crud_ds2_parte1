<?php
    require_once 'conexao.php';

    if (isset($_POST['titulo'])){
        $titulo = $_POST['titulo'];
    } else {
        $titulo = null;
    }

    if (isset($_POST['descricao'])){
        $descricao = $_POST['descricao'];
    } else {
        $descricao = null;
    }

    if (isset($_POST['statu'])){
        $status = $_POST['statu'];
    } else {
        $status = null;
    }


    $sql = "INSERT INTO tarefas ( titulo, descricao, statu) VALUES ( :titulo,:descricao,:statu)";
    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':statu', $status);

    $stmt->execute();
    
?>