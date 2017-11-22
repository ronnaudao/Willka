<!DOCTYPE html>
<html>
<head>
	<title>	</title>
<link rel="stylesheet" href="css/estilo.css"> 
	
</head>
<body>

<div class='indix' align="center">

<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
      echo"<script language='javascript' type='text/javascript'>;window.location.href='listar.php';</script>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Faça login/cadastro para acessar as informações";
      echo"<br><a href='login.html'>LOGIN/CADASTRO</a>";

    }
?>

	</div>

</body>
</html>