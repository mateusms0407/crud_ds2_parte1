<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de Tarefas</title>
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
                <li class="trave"><a href="">TAREFAS</a></li>
                <li class="trave"><a href="#">CATEGORIAS</a></li>
                <li class="isolado"><a href="logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>
    <table border="1" width="100%">
        <tr>
            <th>id</th>
            <th>tarefas</th>
            <th>descrição</th>
            <th>status</th>
            <th>Ações</th>
        </tr>

    <?php
    require 'conexao.php';

    try {
        $stmt = $conexao->prepare("SELECT * FROM tarefas");

        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>" . $rs->id_tarefas . "</td>";
                echo "<td>" . $rs->titulo . "</td>";
                echo "<td>" . $rs->descricao . "</td>";
                echo "<td>" . $rs->statu . "</td>";
               echo "<td><center>
                        <a href=\"?act=upd&id_tarefas=" . $rs->id_tarefas . "\">[Alterar]</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"?act=del&id_tarefas=" . $rs->id_tarefas . "\" 
                         onclick=\"return confirm('Tem certeza que deseja excluir esta tarefa?');\">[Excluir]</a>
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
    <a href="form_tarefas.php" >CRIAR</a>
    </table>
</body>
</html>