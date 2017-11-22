<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="css/estilo.css"> 
</head>
<body>

<div class='liste' align="center">

<?php
include 'menu.php';
include 'banco.php';
$datatable = "usuario";
$results_per_page = 10;

$link = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET["page"])){
	$page = $_GET["page"];
}else{
	$page=1;
}

$start_from = ($page-1) * $results_per_page;

$sql = "SELECT * FROM compras LIMIT $start_from, ".$results_per_page;
$rs_result = mysqli_query($link, $sql);

echo "<table border='1' cellpadding='4' background-color='blue'>";
echo "<tr>";
echo "<td bgcolor ='#00ccff'><strong>Nome</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Email</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>DDD</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Telefone</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Estado</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Cidade</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Endereco</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Quantidade</strong></td>";
echo "<td bgcolor ='#00ccff'><strong>Comentarios</strong></td>";


echo "</tr>";

while($row = mysqli_fetch_array($rs_result, MYSQLI_NUM)){

echo "<tr>";
echo "<td>";
echo $row[0];
echo "</td>";
echo "<td>";
echo $row[1];
echo "</td>";
echo "<td>";
echo $row[2];
echo "</td>";
echo "<td>";
echo $row[3];
echo "</td>";
echo "<td>";
echo $row[4];
echo "</td>";
echo "<td>";
echo $row[5];
echo "</td>";
echo "<td>";
echo $row[6];
echo "</td>";
echo "<td>";
echo $row[7];
echo "</td>";
echo "<td>";
echo $row[8];
echo "</td>";
	




}


echo "</table>";

$sql = "SELECT COUNT(nome) AS total FROM  ".$datatable;
$result=mysqli_query($link,$sql);
$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
$total_pages = ceil($row["total"] / $results_per_page);

for($i=1; $i<=$total_pages; $i++){
	echo "<a href='listar.php?page=".$i."'";
	echo ">".$i."</a>";
}


?>

</div>
</body>
</html>