<h1>Detalhe da Tarefa</h1>
<?php
   include("db/config.php");
   $result=$conn->query("select * from tarefas where idtarefas=".$_GET["id"]);
   while( $registro = $result->fetch_assoc()){
      // echo $registro["idtarefas"];
      echo " ";
      echo $registro["titulo"];
      echo $registro["data"];
      echo $registro["hora"];
      echo $registro["idcategoriaFK"];
      echo $registro["descricao"];
      echo"<br>";
  }
  

?>
