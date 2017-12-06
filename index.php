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
                            <li class="nav-item"><a class="nav-link active" href="produto.html">Produto</a></li>
                            <li class="nav-item"><a class="nav-link" href="historia.html">História da empresa</a></li>
                            <li class="nav-item"><a class="nav-link" href="parceiros.html">Parceiros</a></li>
                            <li class="nav-item"><a class="nav-link" href="compra.html">Formulario de compra</a></li>
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
  @$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
      echo"<script language='javascript' type='text/javascript'>;window.location.href='listar.php';</script>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Faça login para acessar as informações";
      echo"<br><a href='login.html'>LOGIN</a>";

    }
?>
                    
            
        </div>
        
        
        

</body>
</html>



