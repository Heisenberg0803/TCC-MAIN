<?php
include('../conexao/conexao.php');

$db = new Conexao();

class Usuario{
    
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function cadastrar($nome, $email, $senha){

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senhaCriptografada')";

        if($this->conn->query($sql) === true){
            return true;
        }else{
            return false;
        }
    }
}
?>