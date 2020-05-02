<?php
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Login - Ramon</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col mt-5" name="formulario">
                <form method="POST" enctype="multipart/form-data" action="valida.php">
                    <div class="form-group mt-3">
                        <h1 class="text-center mt-3"> Bem-vindo <span class="badge badge-danger text-center">Sistema de Login</span></h1>
                        <label for="login-usuario">Usuário</label>
                        <input type="text" class="form-control" name="login-usuario" required>
                        <small id="loginSubtop" class="form-text text-muted">Apenas caracteres coerentes! (candido)</small>
                    </div>
                    <div class="form-group">
                        <label for="login-senha">Senha</label>
                        <input type="password" class="form-control" name="login-senha" required>
                        <small id="senhaSubtop" class="form-text text-muted">Seus dados guardados com segurança! (sitio12345)</small>
                    </div>
                    
                    <button type="submit" class="btn btn-danger text-center" value="registrar"name="registrar">Entrar</button>

                    <p class="text-center text-danger ">
                        <?php if(isset($_SESSION['loginErro'])){
                            echo $_SESSION['loginErro'];
                            unset($_SESSION['loginErro']);
                        }?>
                    </p>

                </form>
            </div>
        </div>
    </div>
    
    </body>
</html>