<?php
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require "conexao.php";
    require "usuario.php";
    $ms = new usuario();

    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if($ms -> login($email,$senha) == true){
        if(isset($_SESSION['idUser'])){
            header("location: pagina.php");
        }
        else{
            header("location: index.php");
        }
    }else{
        header("location: index.php?erro=1");

    }
}else{
    header("location: index.php?erro=2");
    
   
}
?>
