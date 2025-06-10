<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar tarefas</title>
</head>
<body>
    <form action="cadastrar_atividade.php" method='POST'>
        <h1>tarefas</h1>
        <hr>
        <label for="titulo">titulo:</label>
        <input type="text" name='titulo' id='titulo'>

        <label for="marca">descricao:</label>
        <input type="text" name='descricao' id='descricao'>

        <label for="statu">status:</label>
        <input type="tinyint" name='statu' id='statu'>

        <input type="submit" value='salvar'>
        <hr>
    </form>
</body>
</html>