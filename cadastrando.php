<html>
<head> 
<meta http-equiv="refresh" content="0; sucesso.html">
</head>
<body>
<?php
include('conexao.php');
?>


<?php
$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($conexao,"INSERT INTO usuarios(name, id, email, password)VALUES ('$name', '$id', '$email', '$password')");
// echo "<script>alert('Cadastro realizado com sucesso!);</script>";;
mysqli_close($conexao);
?>

</body>
</html>﻿