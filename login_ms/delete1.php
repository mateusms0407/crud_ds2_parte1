<?php
    require 'conexao.php';
    require 'read1.php';
        if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id_tarefas != "") {
            try {
            $stmt = $conexao->prepare("DELETE FROM tarefas WHERE id = ?");
            $stmt->bindParam(1, $id_tarefas, PDO::PARAM_INT);
            if ($stmt->execute()) {
                echo "Registo foi excluído com êxito";
                $id_tarefas = null;
                header("Location: lista_tarefas.php");
                exit;
            } else {
                throw new PDOException("Erro: Não foi possível executar a declaração
    sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>