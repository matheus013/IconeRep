<html>
<body>
<?php

$vagas   = $_POST ["vagas"];
$idHotel = $_POST ["idHotel"];
$room    = $_POST ["room"];


$conexao = mysql_connect("eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysql_select_db("Room",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

$query = "INSERT INTO `Room` (`vagas`,`idHotel`,`room`,`id`) 

	VALUES('$vagas', '$idHotel','$room', '$id')";


mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
