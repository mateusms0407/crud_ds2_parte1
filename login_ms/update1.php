<?php
require 'conexao.php';

$id = $_GET['id_tarefas'] ?? null;  

$sql1 = "SELECT*FROM tarefas WHERE id_tarefas = :id_tarefas";
$stmt1 = $conexao->prepare($sql1);
$stmt1->bindValue(':id_tarefas', $id);
$stmt1->execute();

$tarefa = $stmt1->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $titulo = $_POST['titulo'] ?? null;
    $descricao = $_POST['descricao'] ?? null;
    $status = $_POST['statu'] ?? null;
    $data = $_POST['data'] ?? null;

    if ($id !== null) {
        $sql = "UPDATE tarefas SET titulo = :titulo, descricao = :descricao, statu = :statu, data = :data WHERE id_tarefas = :id_tarefas";
        $stmt = $conexao->prepare($sql);

        $stmt->bindValue(':titulo', $titulo);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':statu', $status);
        $stmt->bindValue(':data', $data);
        $stmt->bindValue(':id_tarefas', $id);

        $stmt->execute();

        
        header("Location: read1.php");
        exit; 
    } else {
        echo "ID da tarefa não informado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alterar tarefa</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Alterar tarefa</h1>
        <hr>

        <label for="titulo">Título:</label>
        <input value="<?= htmlspecialchars($tarefa['titulo']) ?>" type="text" name="titulo" id="titulo" required />

        <label for="descricao">Descrição:</label>
        <input value="<?= htmlspecialchars($tarefa['descricao']) ?>" type="text" name="descricao" id="descricao" required />

        <label for="statu">Status:</label>
        <input value="<?= htmlspecialchars($tarefa['statu']) ?>" type="text" name="statu" id="statu" required />

        <label for="data">Data:</label>
        <input value="<?= htmlspecialchars($tarefa['data']) ?>" type="date" name="data" id="data" required />

        <input type="submit" value="Salvar" />
        <hr>
    </form>
</body>
</html>
