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
        <h2>Editar Tarefas</h2>
        <form method="post">
            <p>
                Título:
                <input type="text" name="titulo" value="<?php echo $titulo?>">
            </p>
            <br> 
            <p>
                Data:
                <input type="date" name="data" value="<?php echo $data?>">
            </p>
            <br> 
            <p>
                Hora:
                <input type="time" name="hora" value="<?php echo $hora?>">
            </p>
            <br> 
            <p>
                Descrição:
                <br>
                <textarea name="descricao" class="txtarea" cols="40" rows="4"> <?php echo $descricao?></textarea>
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
                <button>Editar</button>
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