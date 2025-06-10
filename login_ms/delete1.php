<?php
    require 'read1.php';
    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    try {
    $stmt = $conexao->prepare("DELETE FROM contatos WHERE id = ?");
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
    echo "Registo foi excluído com êxito";
    $id = null;
    } else {
    throw new PDOException("Erro: Não foi possível executar a declaração
    sql");
    }
    } catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
    }
    }
?>