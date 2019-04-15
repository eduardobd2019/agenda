<?php

include_once('conexão.php');

$conexao = new conexao();

$nome = $_POST['nome'];
$nome = $_POST['e-mail'];
$nome = $_POST['senha'];

$conexao->conn->prepare('INSERT INTO usuarios(nome, email, senha) values (:nome, :email, :senha)');
$smtp = $conexao-execute(array(
	'nome' => $nome,
	'email' => $email,
	'senha' => $senha
));     //Previne que códigos maliciosos SQL possam apagar dados do banco.

if ($smtp){

	echo"Salvo com Sucesso!"

}else{
	
	echo"Error";
}