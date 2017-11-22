<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$quantidade = $_POST['qtd'];
$comentarios = $_POST['coment'];
$erro = 0;


if(empty($nome)){
	echo "Digite seu nome corretamente.<br>";
	$erro = 1;
}
if(empty($email)){
	echo "Digite seu email corretamente.<br>";
	$erro = 1;
}
if(empty($ddd)){
	echo "Digite seu ddd corretamente.<br>";
	$erro = 1;
}
if(empty($telefone)){
	echo "Digite seu telefone corretamente.<br>";
	$erro = 1;
}
if(empty($estado)){
	echo "Digite seu estado corretamente.<br>";
	$erro = 1;
}
if(empty($cidade)){
	echo "Digite sua cidade corretamente.<br>";
	$erro = 1;
}
if(empty($endereco)){
	echo "Digite seu endereco corretamente.<br>";
	$erro = 1;
}
if(empty($quantidade)){
	echo "Digite sua quantidade corretamente.<br>";
	$erro = 1;
}



if($erro == 0) {
	echo "Em breve entraremos em contato com voce<br>";
	include 'insere.inc';
}





?>



</body>
</html>