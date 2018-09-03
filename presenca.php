<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Confirmação - DeMolay MED</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="shortcut icon" href="dm.icon.png" />
	<script type="text/javascript">
		function habilitar() {
			var ide = document.getElementById('ide')
			if(ide.value == "Maçom"){
				document.identificacao.cargo.disabled = 1;
			}else{
				document.identificacao.cargo.disabled = 0;
			}
		} 
	</script>
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
	
	<br></br>
	<br></br>
	
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Confirmar Presença</h4>
							<form method="POST" action="cadstatus.php" form name="identificacao">
								
								<center>
								
								<select class="custom-select border-danger" name="ide" id="ide" onclick="habilitar()" required>
									<option value="">Identifique-se</option>
									<option value="DeMolay">Sou um DeMolay</option>
									<option value="Maçom">Sou um Maçom</option>
									<option value="Visitante">Sou um Visitante</option>
								</select>
							
								<br></br>	
								
								
								<select class="custom-select border-danger" id="cargo" name="cargo" required>
									<option value="">Selecione o cargo de preferência</option>
									<option value="Sem cargo">Sem cargo</option>
									<option value="Indiferente">Indiferente</option>
									<option value="Primeiro Diácono">Primeiro Diácono</option>
									<option value="Segundo Diácono">Segundo Diácono</option>
									<option value="Primeiro Mordomo">Primeiro Mordomo</option>
									<option value="Segundo Mordomo">Segundo Mordomo</option>
									<option value="Orador">Orador</option>
									<option value="Escrivão">Escrivão</option>
									<option value="Tesoureiro">Tesoureiro</option>
									<option value="Sentinela">Sentinela</option>
									<option value="Capelão">Capelão</option>
									<option value="Mestre de Cerimônias">Mestre de Cerimônias</option>
									<option value="Porta-Bandeira">Porta-Bandeira</option>
									<option value="Hospitaleiro">Hospitaleiro</option>
									<option value="Preceptores">Preceptores</option>
									<option value="Outro">Outro</option>
								</select>
								<br></br>
								<div class="form-group no-margin">
									<button type="submit"  class="btn btn-danger btn-block">
										Confirmar
									</button>
								</div>
								
								<div class="form-text text-muted">
									<center>Ao confirmar, você se estará se comprometendo em marcar presença e estudar para seu cargo!</center>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
include('verifica_login.php');
?>
 <!--<h2>Olá, <?php echo $_SESSION['id'];?></h2>-->





















<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/my-login.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>