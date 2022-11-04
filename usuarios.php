<?php
    
    Class Usuario{
        private $pdo;
        public $msgErro = "";
        // conexao com o banco de dados
         // parametros exigidos para conectar o PDO
        public function conectar($nome, $host, $usuario, $senha){

            global $pdo;
            global $msgErro;
            try{
                // criação de um objeto pdo
               $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha); 
            }catch(PDOException $e){
                $msgErro = $e-> getMessage(); 
            }
            
        }
        // cadastrar o usuário e enviar informacoes para o banco de dados
        public function cadastrar($nome, $email, $senha){
            global $pdo;
            global $msgErro;
            //verificar s o email existe
            $sql =$pdo->prepare("SELECT idutilizador FROM utilizador WHERE email= :e");
            $sql->bindValue(":e", $email);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
            }else {
                $sql=$pdo->prepare("INSERT INTO usuarios (nome,email,senha) VALUES(:n,:e,:s) ");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", md5($senha));
                $sql->execute();
                return true;          
            }
        }
        // verifica se o usuário está cadastrado
        public function logar($email, $senha){
            global $pdo;
            global $msgErro;
            $sql = $pdo -> prepare("SELECT idutilizador FROM utilizador WHERE email=:e AND senha=:s");
            $sql ->bindValue(":e", $email);
            $sql ->bindValue(":s", md5($senha));
            $sql ->execute(); 
            if($sql->rowCount() > 0){
              $dados = $sql -> fetch();
              session_start();
              $_SESSION['idutilizador'] = $dados ['idutilizador'];
              return true;  

            }else {
                return false;
            }
        }
    }


?>