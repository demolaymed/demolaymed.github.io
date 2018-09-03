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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
include('conexao.php');
$sql = "SELECT * FROM status";
$result = $conexao->query($sql);
?>
 <!--<h2>Olá, <?php echo $_SESSION['id'];?></h2>-->

 <body>
	<section class="h-100"> 
		<div class="container h-100">
			<div class="container">
				<div>
					<br></br>
					<br></br>
					<center> <h2> Status da Reunião: <div class="text-danger"> Ritualística </div> </h2> <br/></center>
				</div>
				
				<h1 align="center">Lista de Confirmados</h1>
				<table class="table-striped table-bordered table table-light">
				<caption>Lista de Confirmados</caption>
				<thead class="thead-dark">
				<tr>
				<th>#</th>
				<th>Identificação</th>
				<th>Cargo</th>
				<!--<th>Nome</th>-->
				<th>ID DeMolay</th>
				</tr>
				</thead>
				<?php
				//Fetch Data form database
				if($result->num_rows > 0){
				 while($row = $result->fetch_assoc()){
				 ?>
					 <tr>
					 <td><?php echo $row['auto']; ?></td>
					 <td><?php echo $row['ide']; ?></td>
					 <td><?php echo $row['cargo']; ?></td>
					 <!--<td><?php echo $row['name']; ?></td>-->
					 <td><?php echo $row['id']; ?></td>
					 </tr>
					 <?php
					 }
					}
					else
					{
					 ?>
					 <tr>
					 <th colspan="4"><center>Ninguém confirmou ainda :(</center></th>
					 </tr>
					 <?php
					}
				?>
				</table>		
										
	</section>

















<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/my-login.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>