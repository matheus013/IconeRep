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

include 'connectDB.php';

$query = "INSERT INTO `Participante` ( `nomeProgramacao` , `descricao`,  `horario` , `numVagas` ,
				  `xmlCertificado`) 
VALUES ('$nomeCompleto', '$descricao', '$horario', '$numVagas', '$xmlCertificados')";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>

