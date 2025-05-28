<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <img class="logo" src="logo_ms.png" alt="logo">;

    <div class="area_login">
       <form action="logar.php" method='POST'>
            <label>E-mail:</label>
            <input  type="text" name='email' id='email'>
            senha:
            <input type="password" name='senha' id='senha'>
            <input class="botao_login" type="submit" value="Login">
        </form>
    </div>
</body>
</html>
