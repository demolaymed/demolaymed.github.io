<html>
<head>
<meta http-equiv="refresh" content="0; resetsucesso.html">
</head>
<body>
<?php
include('conexao.php');
?>

<?php
$idreset=$_POST['idreset'];
$newpass=$_POST['newpass'];
$sql=mysqli_query($conexao, "UPDATE `usuarios` SET `password` = '$newpass' WHERE `usuarios`.`id` = '$idreset'");
mysqli_close($conexao);
?>


</body>
</html>