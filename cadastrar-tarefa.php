<?php
    include("db/config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de tarfas</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .formulario{
            border: 1px solid gray;
            width: 40%;
            height: 50%;
            padding: 10px;
            border-radius:10px;
            margin: 100px 380px 0px auto;
            
        }
        h2{
            text-align:center;
        }
        input{
            border-radius: 5px;
            margin-top:5px;
        }
        .txtarea{
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <h2>Cadastro de Tarefas</h2>
        <form method="post" action="db/cadastro-tarefas.php">
            <p>
                Título:
                <input type="text" name="titulo">
            </p>
            <br> 
            <p>
                Data:
                <input type="date" name="data">
            </p>
            <br> 
            <p>
                Hora:
                <input type="time" name="hora">
            </p>
            <br> 
            <p>
                Descrição:
                <br>
                <textarea name="descricao" class="txtarea" cols="40" rows="4"></textarea>
            </p>
            <br>
            <p>
                <?php
                    include("db/selecionar-categorias.php");
                ?>
            </p>
            <br>
            <p>
                Anexo:
                <input type="file" name="anexo">
            </p>
            <br> 
            <p>
                <button>Cadastrar</button>
            </p> 
        </form>
    </div>
</body>
</html>