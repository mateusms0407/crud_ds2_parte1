
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="divlogo">
        <img class="logo" src="logo_ms.png" alt="logo">
    </div>
    <div class="area_login">
        <h3 class="seja">Seja bem vindo</h3>
        <img class="usu" src="usuario.png" alt="usuario">
       <form action="logar.php" method='POST'>
            <label>E-mail:</label>
            <input  type="text" name='email' id='email'>
            <label>Senha:</label>
            <input type="password" name='senha' id='senha'>
            <input class="botao_login" type="submit" value="Login">
            <h4 class="cadastrar">cadastre-se</h4>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] ==  1){
                    echo "email ou senha incorreto";
                }elseif(isset($_GET['erro']) && $_GET['erro'] == 2) {
                    echo "email ou senha não informado";
                }
            ?>
        </form>
    </div>
   
</body>
</html>
