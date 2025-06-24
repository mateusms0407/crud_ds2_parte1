<?php
require 'conexao.php';
require 'protecao.php';

$id = $_GET['id_categoria'] ?? null;  

$sql1 = "SELECT*FROM categorias WHERE id_categoria = :id_categoria";
$stmt1 = $conexao->prepare($sql1);
$stmt1->bindValue(':id_categoria', $id);
$stmt1->execute();

$categoria = $stmt1->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nome = $_POST['nome'] ?? null;
    $descricao = $_POST['descricao'] ?? null;

    if ($id !== null) {
        $sql = "UPDATE categorias SET nome = :nome, descricao = :descricao WHERE id_categoria = :id_categoria";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':id_categoria', $id);

        $stmt->execute();

        
        header("Location: read2.php");
        exit; 
    } else {
        echo "ID da categoria não informado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alterar tarefa</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <form action="" method="POST">
        <h1>Alterar categoria</h1>

        <label for="nome">nome:</label>
        <input value="<?= htmlspecialchars($categoria['nome']) ?>" type="text" name="nome" id="nome" required />

        <label for="descricao">Descrição:</label>
        <input value="<?= htmlspecialchars($categoria['descricao']) ?>" type="text" name="descricao" id="descricao" required />

        <input type="submit" value="Salvar" />
    </form>
</body>
</html>
