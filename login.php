<?php
    require_once 'usuarios.php';
    $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ToDo List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <h1>Login ToDo List</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Entrar">
            <a href="cadastro.php">Ainda não é inscrito?<strong>Cadastre-se</strong> </a>
        </form>
    </div>
    <?php 
        if(isset($_POST['email'])){ 
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            echo $email;
            echo $senha;
            if(!empty($email) && !empty($senha)){
                $u->conectar("todolist", "localhost", "root", "");
                if($msgErro == ""){
                    if($u->logar($email,$senha)){
                        header("location:index.php");
                    }else{
                        ?>
                        <div class="msgErro">"Email e/ou senha inválidos"</div> 
                        <?php
                    }
                }else{
               echo "Erro: ".$u->msgErro; 
                }
        }else{
            ?>
            <div class="msgErro">"Preencha todos os campos solicitados"</div>
            <?php
            }
        }

    ?>
</body>
</html>