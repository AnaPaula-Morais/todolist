<?php
require '../pdo/configpdo.php';

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$categoria = $_POST['idcategoria'];

echo "<pre>";
print_r($_FILES);
$nome = $_FILES['imagem']['name'];
$sql= $pdo->prepare("insert into tarefas(titulo,hora,data,descricao,idcategoriaFK,imagem) values (:titulo, :hora,:data,:descricao, :categoria, :nome)");
$sql-> bindValue(':titulo', $titulo);
$sql-> bindValue(':hora', $hora);
$sql-> bindValue(':data', $data);
$sql-> bindValue(':descricao', $descricao);
$sql-> bindValue(':categoria', $categoria);
$sql-> bindValue(':nome', '../arquivos/'.$nome);
$sql->execute();

header("location: ../index.php");

// include("config.php");
// 1-pegar dados enviados
// $titulo = $_POST['titulo'];
// $data = $_POST['data'];
// $hora = $_POST['hora'];
// $descricao = $_POST['descricao'];
// $categoria = $_POST['idcategoria'];
// echo "<pre>";
// print_r($_FILES);
// $nome = $_FILES['imagem']['name'];
// move_uploaded_file($_FILES['imagem']['tmp_name'], '../arquivos/'.$nome);
// $sql="insert into tarefas(titulo,hora,data,descricao,idcategoriaFK,imagem) values ('$titulo','$hora','$data','$descricao', $categoria, 'arquivos/$nome')";
// echo $sql;
// $conn->query($sql);
  
//   if ($conn -> connect_errno) {
//     echo "Failed to connect to MySQL: " . $conn -> connect_error;
//     exit();
//   }
    
//   $conn -> close();
// // 5-redirecionar a página
// header("Location: ../index.php");
// exit(); 
?>

