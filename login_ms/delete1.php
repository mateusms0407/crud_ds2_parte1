<?php
require_once 'conexao.php';


$id = filter_input(INPUT_GET, 'id_tarefas', FILTER_VALIDATE_INT);

if ($id === false || $id === null) {
    echo "ID inválido.";
    exit;
}

$stmt = $conexao->prepare("DELETE FROM tarefas WHERE id_tarefas = ?");
$stmt->execute([$id]);

header("Location: read1.php");
exit();
?>
