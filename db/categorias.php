<h1>Categorias</h1>
<?php
    include("config.php");
    $result=$conn->query("select * from categoria");
    while( $registro = $result->fetch_assoc()){
        echo $registro["idcategoria"];
        echo " ";
        echo $registro["nome"];
        echo"<br>";
    }
    $conn->close();

?>