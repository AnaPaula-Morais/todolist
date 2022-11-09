<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
Categorias:
<?php
    include("config.php");
    $result=$conn->query("select * from categorias order by nome");
    echo "<select class='form-control form-control-sm' name = 'idcategoria'>";
    while( $registro = $result->fetch_assoc()){

        $idcategoria = $registro["idcategoria"];
        $categoria = $registro["nome"]; 
        echo "<option value = '$idcategoria'> $categoria </option>";
        
    }
    echo "</select>";
    $conn->close();

?>