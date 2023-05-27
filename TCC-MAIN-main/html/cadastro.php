<?php
require_once('../classes/usuario.php');
require_once('../conexao/conexao.php');

$database = new Conexao();
$db = $database->getConnection();
$usuario = new Usuario($db);

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($usuario->cadastrar($nome,$email,$senha)){
      echo "Cadastro realizado com sucesso";
    }
}

?>





<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
</head>
<body>
  <h2>Cadastro</h2>
  <form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

   

    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>
</body>
</html>
