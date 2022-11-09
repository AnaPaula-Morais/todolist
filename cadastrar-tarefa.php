<?php
    require 'pdo/configpdo.php';
    // include("db/config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de tarfas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Tarefas</h2>
        <form method="post" enctype="multipart/form-data" action="db/cadastro-tarefas.php">
            <div class="form-group">
                <p>
                    Título:
                    <input class="form-control" type="text" name="titulo" required>
                </p>
                <br> 
                <p>
                    Data:
                    <input class="form-control" type="date" name="data">
                </p>
                <br> 
                <p>
                    Hora:
                    <input class="form-control" type="time" name="hora">
                </p>
                <br> 
                <p>
                    Descrição:
                    <br>
                    <textarea class="form-control"  name="descricao" class="txtarea" cols="40" rows="4"></textarea>
                </p>
                <br>
                <p>
                    <?php
                        include("db/selecionar-categorias.php");
                    ?>
                </p>
                <br>
                <p>
                    Imagem:
                    <input class="form-control" type="file" name="imagem">
                </p>
                <br> 
                <p>
                    <button class="btn btn-primary">Cadastrar</button>
                </p> 
            </div>
        </form>
    </div>
</body>
</html>