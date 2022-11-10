<!DOCTYPE html>
<?php
    require_once 'usuarios.php';
    $u = new Usuario;

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ToDo List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container-cad">
        <h1>Cadastro</h1>
        <form method="POST">
            <div class="form-group">
                <input class="form-control" type="text" name="nome" placeholder="Nome" maxlength="50">
                <input class="form-control" type="email" name="email" placeholder="E-mail" maxlength="60">
                <input class="form-control" type="password" name="senha" placeholder="Senha" maxlength="10">
                <input class="form-control" type="password" name="confsenha" placeholder="Confirmar senha">
                <input style="width: 460px" class="form-control" type="submit" value="Cadastrar"> 
                </div>
        </form>
    </div>
    <?php
        if(isset($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarSenha = addslashes($_POST['confsenha']);
            if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){
                $u -> conectar("todolist", "localhost", "root", "");
                if($msgErro == ""){
                    if($senha == $confirmarSenha){
                        if($u->cadastrar($nome, $email, $senha)){
                            ?>
                           <div id="cadOk">Usuário cadastrado com sucesso!</div>
                            <?php
                        }else {
                            ?>
                           <div class="msgErro">Usuário ja cadastrado!</div>
                           <?php
                        }
                    }else {
                        ?>
                        <div class="msgErro">As senhas são diferentes</div>
                        <?php
                    }
                    
                }else{
                    ?>
                    <div class="msgErro" style="width: 460px; margin: 30px auto;">
                        <?php echo "ERRO: ".$u->msgErro; ?>
                    </div>
                    <?php
                }
            }else{
                ?>
                <div class="msgErro" style="width: 460px; margin: 10px 750px; padding: 10px;">Preencha todos os campos!</div>
                <?php
                
               
            }
        }

    ?>
</body>
</html>