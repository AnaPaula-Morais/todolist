<?php

    $id = $_GET["id"];

    include("db/config.php");
    $conn->query("delete from tarefas where idtarefas = $id");
    
    header("Location: index.php");
?>