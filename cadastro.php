<html>
<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nomeCompleto	= $_POST ["nomeCompleto"]; //ok
$nomeCracha	= $_POST ["nomeCracha"]; //ok
$email	= $_POST ["email"];	//ok
$tel	= $_POST ["telefone"];	//ok
$estado	= $_POST ["estado"];	//ok
$cpf = $_POST["cpf"];//ok
$idEj     = $_POST ["idEj"];//ok
$cargo  = $_POST ["cargo"];//ok
$federacao = $_POST["federacao"];//ok
$tempoMej = $_POST["tempoMej"];//ok
$senha  = $_POST ["senha"];//ok
$idQuarto = $_POST["idQuarto"];
//Gravando no banco de dados !

include 'connectDB.php';

$query = "INSERT INTO `Participante` ( `nomeCompleto` , `nomeCracha`,  `email` , `telefone` ,
				  `uf` , `cpf` , 'federacao' , 'cargo' ,
						 `senha` , `tempoMej` , `idEj`, `idQuarto` ) 
VALUES ('$nomeCompleto', '$nomeCracha', '$email', '$tel', '$estado', '$cpf', '$federacao',
					 '$cargo' ,  '$senha', '$tempoMej', '$idEj' , '$idQuarto')";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
