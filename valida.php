<?php
    session_start();
    if(isset($_POST['registrar'])){
        $login_usuario = $_POST['login-usuario'];
        $senha_usuario = $_POST['login-senha'];
        if($login_usuario == 'candido' && $senha_usuario == 'sitio12345'){
            header("Location: administrativo.php");
        }else{
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: index.php");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }


?>