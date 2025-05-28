<?php
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require "conexao.php";
    require "usuario.php";
    $ms = new usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($ms -> login($email,$senha) == true){
        if(isset($_SESSION['idUser'])){
            header("location: pagina.php");
        }else{
            header("location: index.php");
        }
    }else{
        echo"email ou senha incorreto";
        header("location: index.php");

    }
}else{
    echo"email ou senha não informado";
    header("location: index.php");
}
?>