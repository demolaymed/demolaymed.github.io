
<?php
include('conexao.php');
include('verifica_login.php');
?>


<?php
$id=$_SESSION['id'];
$ide=$_POST['ide'];
$cargo=$_POST['cargo'];
$idf= $id;



$sql=mysqli_query($conexao,"INSERT INTO status(id, ide, cargo)VALUES ('$idf', '$ide', '$cargo')");
echo "<script>alert('Cadastro realizado com sucesso!);</script>";;
mysqli_close($conexao);

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="3; status.php">
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Confirmação - DeMolay MED</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="shortcut icon" href="dm.icon.png" />
</head>

<body>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="dm.icon.png">
					</div>
					
<center>
	<h1> Confirmado! <p> </h1>
	<h3> Acompanhe o preparamento na página de Status <p> </h3>
	<h5> Redirecionando para a página de Status </h5>
	
</center>
	

					
<div class="footer">
						Copyright &copy; 2018 &mdash; DeMolay Medianeira  
					</div>
</body>
</html>