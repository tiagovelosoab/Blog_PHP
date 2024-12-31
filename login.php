<?php
    $login=$_POST['login'];
    $senha=$_POST['senha'];
    if(isset($login) and isset($senha)){
        if($login=="admin" and $senha=="123456"){
            header("Location: conecta_blog.php");
            exit;
    exit;
        }else{
            session_start();
            $_SESSION["mensagem"]="Usuário ou senha inválidos, tente novamente";
            header("Location: paginalogin.php");          
            exit;
        }
    }
?>