<?php

include 'conecta_mysql.inc';
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$quantidade = $_POST['qtd'];
$comentarios = $_POST['coment'];


$sql = "INSERT INTO compras VALUES";
$sql .="('$nome', '$email', '$ddd', '$telefone', '$estado', '$cidade', '$endereco', '$quantidade', '$comentarios')";

if($conexao->query($sql) === TRUE){
	echo "Ordem de compra incluida com sucesso.";

} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>