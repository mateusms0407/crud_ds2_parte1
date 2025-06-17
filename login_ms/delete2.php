<?php
require_once 'conexao.php';
require_once 'delete1.php';

$id = filter_input(INPUT_GET, 'id_categoria', FILTER_VALIDATE_INT);

if ($id === false || $id === null) {
    echo "ID inválido.";
    exit;
}

$stmt = $conexao->prepare("DELETE FROM categorias WHERE id_categoria = ?");
$stmt->execute([$id]);

header("Location: read2.php");
exit();
?>
