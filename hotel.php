<html>
<body>
<?php

$nome     = $_POST ["nomeHotel"];
$endereco = $_POST ["endereco"];

$conexao = mysql_connect("eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysql_select_db("Hotel",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

$query = "INSERT INTO `Hotel` (`nomeHotel`,`endereco`) 

	VALUES(´$nome´, ´$endereco´)";


mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
