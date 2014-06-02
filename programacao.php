<html>
<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nomeProgramacao= $_POST ["nomeProgramacao"];
$descricao	= $_POST ["descricao"];
$horario	= $_POST ["horario"];	
$numVagas	= $_POST ["numVagas"];	
$xmlCertificados= $_POST ["xmlCertificados"];	
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect("eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("Programacao",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

$query = "INSERT INTO `Participante` ( `nomeProgramacao` , `descricao`,  `horario` , `numVagas` ,
				  `xmlCertificado`) 
VALUES ('$nomeCompleto', '$descricao', '$horario', '$numVagas', '$xmlCertificados')";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>

