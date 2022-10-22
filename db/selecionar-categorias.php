Categorias:
<?php
    include("config.php");
    $result=$conn->query("select * from categorias order by nome");
    echo "<select name = 'idcategoria'>";
    while( $registro = $result->fetch_assoc()){

        $idcategoria = $registro["idcategoria"];
        $categoria = $registro["nome"]; 
        echo "<option value = '$idcategoria'> $categoria </option>";
        
    }
    echo "</select>";
    $conn->close();

?>