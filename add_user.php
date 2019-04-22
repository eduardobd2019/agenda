<?php
require("config.php");

$nome			= strip_tags($_POST['nome']);
$email			= strip_tags($_POST['email']);
$senha			= strip_tags($_POST['senha']);


$sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
$sql->bindValue(":nome", $nome, PDO::PARAM_STR);
$sql->bindValue(":email", $email, PDO::PARAM_STR);
$sql->bindValue(":senha", $senha, PDO::PARAM_STR);
$sql->execute();



if($sql){
	echo "Success!";

} 
