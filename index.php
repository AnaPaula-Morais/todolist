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
</head>
<body>
    <div>
        <h1>ToDo List</h1>
        <table border="1">
            <tr>
                <td>Título</td>
                <td>Data</td>
                <td>Hora</td>
                <td>Categoria</td>
                <td>Descrição</td>
            </tr>
            <?php foreach($result as $tarefa){ ?>
            <tr>
                <td>
                  <a href="detalhes.php?id=<?= $tarefa['idtarefas'] ?>"><?=$tarefa['titulo']?></a>
                </td> 
                <td><?=$tarefa["data"]?></td>
                <td><?=$tarefa["hora"]?></td>
                <td><?=$tarefa["idcategoriaFK"]?></td>
                <td><?=$tarefa["descricao"]?></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <a href="cadastrar-tarefa.php"><button>Cadastrar Tarefas</button></a>
    </div>

  
</body>
</html>