<html>
<body>
<?php

$vagas   = $_POST ["vagas"];
$idHotel = $_POST ["idHotel"];
$quarto    = $_POST ["quarto"];


$conexao = mysql_connect("eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysql_select_db("Quarto",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

$query = "INSERT INTO `Quarto` (`numQuarto`,`idHotel`,`numVagas`) 

	VALUES('$quarto', '$idHotel','$vagas')";


mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
