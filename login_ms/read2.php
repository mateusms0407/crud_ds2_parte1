<?php
require 'protecao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de categorias</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1><a href="#"><img src="logo_ms.png" alt="logo"></a></h1>
            </div>
            <ul class="navlinks">
                <li class="trave"><a href="pagina.php" >HOME</a></li>
                <li class="trave"><a href="read1.php">TAREFAS</a></li>
                <li class="trave"><a href="">CATEGORIAS</a></li>
                <li class="isolado"><a href="logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>
    <table border='1'>
        <tr>
            <th>id</th>
            <th>categorias</th>
            <th>descrição</th>
            <th>Ações</th>
        </tr>

    <?php
    require 'conexao.php';

    try {
        $stmt = $conexao->prepare("SELECT * FROM categorias");

        if ($stmt->execute()) {
            while ($exibir = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>" . $exibir->id_categoria . "</td>";
                echo "<td>" . $exibir->nome . "</td>";
                echo "<td>" . $exibir->descricao . "</td>";
                echo "<td><center>
                     <a href='update2.php?id_categoria=" . htmlspecialchars($exibir->id_categoria) . "'>Alterar</a>
        
                    <a href=\"delete2.php?id_categoria=" . $exibir->id_categoria . "\" 
                    onclick=\"return confirm('Tem certeza que deseja excluir esta categoria?');\">Excluir</a>
                    </center></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Erro: Não foi possível recuperar os dados do banco de dados</td></tr>";
        }
    } catch (PDOException $erro) {
        echo "<tr><td colspan='5'>Erro: " . $erro->getMessage() . "</td></tr>";
    }
    ?>
    <a class="criar" href="form_categorias.php" >CRIAR</a>
    </table>
</body>
</html>