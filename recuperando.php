<html>
<head>
<meta http-equiv="refresh" content="0; emailsucesso.html">
</head>
<body>
<?php
include('conexao.php');
?>


<?php
$idrec=$_POST['idrec'];
$emailrec=$_POST['emailrec'];
$sql=mysqli_query($conexao, "UPDATE `usuarios` SET `rec` = 'REC!' WHERE `usuarios`.`id` = '$idrec' AND `usuarios`.`email` = '$emailrec'");
mysqli_close($conexao);
?>


</body>
</html>