<?php
   include("db/config.php");
   $result=$conn->query("select * from tarefas where idtarefas=".$_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
      img{
         width: 200px;
         
      }
   </style>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <div class="container">
      <table class="table table-striped">
         <?php while( $registro = $result->fetch_assoc()){?>
         
         <h1>Detalhes da Tarefa</h1>
        
         <th>
            <td><p><strong>Título da tarefa:</strong> <?=$registro["titulo"]?></p></td> 
            <td><p><strong>Data:</strong> <?=$registro["data"]?></p></td>
            <td><p><strong>Hora:</strong> <?=$registro["hora"]?></p></td> 
            <td><p><strong>ID da categoria:</strong> <?=$registro["idcategoriaFK"]?></p></td>
            <td><p><strong>Descrição:</strong> <?=$registro["descricao"]?></p></td>
            <td>  
               <p>
                  <strong>Imagem:</strong><br>
                  <img src="<?=$registro["imagem"]?>" alt="">
               </p>
         </th>  
      </table> 
      <a class="btn btn-primary" href="editar.php?id=<?=$registro['idtarefas']?>">Editar</a>
         <?php } ?>
   </div> 
</body>
</html>
