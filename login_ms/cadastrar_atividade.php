<?php
    session_start()
    require_once 'conexao.php';

    if (isset($_POST['id_tarefas'])){
        $id_tarefas = $_POST['id_tarefas'];
    } else {
        echo 'tem que preencher';
    }

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



    $sql = "INSERT INTO tarefas (id_tarefas, titulo, descricao, statu) VALUES (:id_tarefas, :titulo,:descricao,:statu)";
    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':id_tarefas', $id_tarefas);
    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':statu', $status);

    $stmt->execute();
    
?>