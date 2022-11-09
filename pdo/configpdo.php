<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todolist";
    
    
    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$servername,$username,$password);
    
    // $sql = $pdo->query('SELECT * FROM utilizador');

    // $dados = $sql->fetchAll (PDO::FETCH_ASSOC);

    // echo"<pre>";
    // print_r($dados);
?>