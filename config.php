<?php

try{
	$pdo = new PDO('mysql:host=localhost;
		dbname=id9069320_bd2019','id9069320_bd2019','2019bd2019');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOExpetion $e){
	echo 'Erro: ' . $e>getMessage();
 }

?>

 