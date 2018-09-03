<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>DeMolay Medianeira</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="shortcut icon" href="dm.icon.png" />
</head>	

<body class="my-login-page">
	<nav class="navbar-expand-md navbar-dark bg-dark fixed-top form-inline ">
		<!--<ul class="navbar-brand"> <img  src="dm.icon.png" height="32" width="32"> </ul>-->
		<!--<span class="navbar-text"> DeMolay Medianeira </span>-->
		
		
		<ul class="navbar-nav ">
			<li class="nav-item">
				<a class="nav-link text-white h6 mb-0 ml-4 mr-2" href="index.php"> Início </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-warning h6 mb-0" href="presenca.php"> Confirmar presença </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white h6 mb-0" href="noticias.php"> Notícias </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white h6 mb-0" href="ranking.php"> Ranking </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white h6 mb-0" href="atas.php"> Atas </a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link text-white h6 mb-0 " href="config.php"> Configurações </a>
			</li>
			<li class="nav-item navbar-danger">
				<a class="nav-link text-danger h6 mb-0 ml-2 mr-4" href="logout.php"> Sair </a> 
			</li>	
		</ul>
	</nav>
<?php
include('verifica_login.php');
?>
 <!--<h2>Olá, <?php echo $_SESSION['id'];?></h2>-->
<br></br>
<br></br>
<br></br>
<center> <h1> Olá Irmãos! Sejam bem-vindos à Página de Notícias! <p> <h4> Em construção! </h4> </p> </h1> </center>



















<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/my-login.js"></script>
</body>
</html>