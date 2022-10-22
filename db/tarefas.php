<h1>Tarefas</h1>
<?php 
    include("config.php");
    $result = $conn->query("select * from tarefas");
    while($registro = $result->fetch_assoc()){
        echo "<div class='item'>";
        $id=$registro["id"];
        echo "<p class='titulo'>".$registro["nome"]."</p>";
        echo "</div>";
    }

?>