<!DOCTYPE html>
<html lang="pt-br">
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
        <input type="text" name='statu' id='statu'>

        <label for="data">data:</label>
        <input type="date" name='data' id='data'>

        <input type="submit" value='salvar'>
        <hr>
    </form>
</body>
</html>