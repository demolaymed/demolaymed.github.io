<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<meta charset="utf-8">
	<title>TESTE</title>
	<link rel="shortcut icon" href="dm.icon.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>	

<body>
<?php 
include('conexao.php'); 
$sql = "SELECT * FROM status";
$result = $conexao->query($sql);
?>
<!doctype html>
<html>
<body>
<div class="container">
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
</body>
</html>

							  
							  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>