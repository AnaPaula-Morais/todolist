<?php
    include("db/config.php");
    $result=$conn->query("select * from tarefas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List - Home</title>
    <style>
        tr{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ToDo List</h1>
        <a href="cadastrar-tarefa.php"><button>Cadastrar Tarefas</button></a>
        <br><br>
        <table border="1">
            <tr>
                <td>Título</td>
                <td>Data</td>
                <td>Hora</td>
                <td>Categoria</td>
                <td>Descrição</td>
                <td>Opções</td>
            </tr>
            <?php foreach($result as $tarefa){ ?>
            <tr>
                <td>
                  <a href="detalhes.php?id=<?= $tarefa['idtarefas']?>"><?=$tarefa['titulo']?></a>
                </td> 
                <td><?=$tarefa["data"]?></td>
                <td><?=$tarefa["hora"]?></td>
                <td><?=$tarefa["idcategoriaFK"]?></td>
                <td><?=$tarefa["descricao"]?></td>
                <td>
                    <a href="excluir.php?id=<?=$tarefa['idtarefas']?>">Excluir</a>
                    <a href="editar.php?id=<?=$tarefa['idtarefas']?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        
    </div>  
</body>
</html>