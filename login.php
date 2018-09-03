<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login - DeMolay MED</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="shortcut icon" href="dm.icon.png" />
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="dm.icon.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<?php 
							if(isset($_SESSION['nao_autenticado'])): 
							?>
							<div class="form-control border-danger bg-danger text-white">
								<center>ERRO: Usuário ou senha inválidos.</center>
							</div>
							<?php
							endif;
							unset($_SESSION['nao_autenticado']);
							?>
							<form action="login-1.php" method="POST">
								<p>
								<div class="form-group">
									<label for="id">Identidade DeMolay</label>

									<input id="id" type="text" class="form-control border-danger" name="id" value="" required autofocus> 
								</div>

								<div class="form-group">
									<label for="password">Senha
										<a href="forgot.html" class="float-right text-danger">
											Esqueceu a senha?
										</a>
									</label>
									<input id="password" type="password" class="form-control border-danger" name="password"  > 
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-danger btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center ">
									Você não possui uma conta? <a href="register.html" class="cadastro text-danger"> Cadastre-se </a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2018 &mdash; DeMolay Medianeira 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
