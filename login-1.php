<?php
session_start();
include('conexao.php');

if(empty($_POST['id']) || empty($_POST['password'])) {
	header('Location: login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['id']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select name, id from usuarios where id = '{$usuario}' and password = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['id'] = $usuario;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}
?>