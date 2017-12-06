<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Willka Energy</title>

 
    <link rel="stylesheet" href="hrefttps://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">             
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  
    <link rel="stylesheet" href="css/estilo.css">                              
    

    <body>
        
        <div class="container">
            <header class="tm-site-header">
                <h1 class="tm-site-name">Willka Energy</h1>
                
                <nav class="navbar navbar-expand-md tm-main-nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                        <ul class="nav nav-fill tm-main-nav-ul">
                            <li class="nav-item"><a class="nav-link" href="produto.html">Produto</a></li>
                            <li class="nav-item"><a class="nav-link" href="historia.html">História da empresa</a></li>
                            <li class="nav-item"><a class="nav-link" href="parceiros.html">Parceiros</a></li>
                            <li class="nav-item"><a class="nav-link" href="compra.html">Formulario de compra</a></li>
                            <li class="nav-item"><a class="nav-link active" href="index.php">ADM</a></li>
                        </ul>
                    </div>
                </nav>
                
            </header>
            
            <div class="tm-main-content">
                <section class="tm-margin-b-l">
                    <header>
                        <h2 class="tm-main-title">Listar</h2>    
                    </header>
                    
                    <?php
include 'menu.php';
include 'banco.php';
$datatable = "usuario";
$results_per_page = 1000;

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