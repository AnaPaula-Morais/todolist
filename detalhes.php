<?php
   include("db/config.php");
   $result=$conn->query("select * from tarefas where idtarefas=".$_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php while( $registro = $result->fetch_assoc()){?>
   <h1>Detalhes da Tarefa</h1>
   <p><strong>Título da tarefa:</strong> <?=$registro["titulo"]?></p>
   <p><strong>Data:</strong> <?=$registro["data"]?></p>
   <p><strong>Hora:</strong> <?=$registro["hora"]?></p>
   <p><strong>ID da categoria:</strong> <?=$registro["idcategoriaFK"]?></p>
   <p><strong>Descrição:</strong> <?=$registro["descricao"]?></p>
   <a href="editar.php?id=<?=$registro['idtarefas']?>">Editar</a>
   <?php } ?>

</body>
</html>
