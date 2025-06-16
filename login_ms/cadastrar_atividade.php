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

    if (isset($_POST['data'])){
        $data = $_POST['data'];
    } else {
        $data = null;
    }


    $sql = "INSERT INTO tarefas (titulo, descricao, statu,data ) VALUES ( :titulo,:descricao,:statu,:data)";
    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':statu', $status);
    $stmt->bindValue(':data', $data);

    $stmt->execute();
    header("Location: read1.php");

    
?>