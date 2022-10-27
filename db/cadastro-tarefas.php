<?php 
  include("config.php");
  $titulo = $_POST['titulo'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
  $descricao = $_POST['descricao'];
  $categoria = $_POST['idcategoria'];
  
  $sql="insert into tarefas(titulo,hora,data,descricao,idcategoriaFK) values ('$titulo','$hora','$data','$descricao', $categoria)";
  echo $sql;
  $conn->query($sql);
  
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
    
  $conn -> close();
  
  header("Location: ../index.php");
  exit();

?>