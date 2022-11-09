<?php
    if (empty($_GET["id"])){
       header("location: index.php");
    }

    $id = $_GET["id"];
    include("db/config.php");
    $result=$conn->query("select * from tarefas where idtarefas='$id'");
    //nao sei o que essa linha faz
    if ( $registo = $result->fetch_assoc())
    {
        $titulo = $registo["titulo"];
        $data = $registo["data"];
        $hora = $registo["hora"];
        $categoria = $registo["idcategoriaFK"];
        $descricao = $registo["descricao"];
    } 
    
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
        <h2>Editar Tarefas</h2>
        <form method="post">
            <p>
                Título:
                <input class="form-control" type="text" name="titulo" value="<?php echo $titulo?>">
            </p>
            <br> 
            <p>
                Data:
                <input class="form-control" type="date" name="data" value="<?php echo $data?>">
            </p>
            <br> 
            <p>
                Hora:
                <input class="form-control" type="time" name="hora" value="<?php echo $hora?>">
            </p>
            <br> 
            <p>
                Descrição:
                <br>
                <textarea class="form-control" name="descricao" class="txtarea" cols="40" rows="4"> <?php echo $descricao?></textarea>
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
                <input class="form-control" type="file" name="anexo">
            </p>
            <br> 
            <p>
                <button class="btn btn-primary">Editar</button>
            </p> 
        </form>
    </div>

<?php
    
    if (!empty($_POST["titulo"])){
        $titulo=$_POST["titulo"];
        $data=$_POST["data"];
        $hora=$_POST["hora"];
        $descricao=$_POST["descricao"];
        $id=$_GET["id"];
        include("db/config.php");
        $sql="update tarefas set titulo='$titulo',data='$data', hora='$hora', descricao='$descricao' where idtarefas='$id'";
        
        $conn->query($sql);
        $conn->close();
        header("location: index.php");
    }
    
?>
</body>
</html>