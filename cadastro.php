<html>
<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nomeCompleto	= $_POST ["nomeCompleto"];
$nomeCracha	= $_POST ["nomeCracha"];
$email	= $_POST ["email"];	
$tel	= $_POST ["telefone"];	
$estado	= $_POST ["estado"];	
$cpf = $_POST["cpf"];
$idEj     = $_POST ["idEj"];
$cargo  = $_POST ["cargo"];
$federacao = $_POST["federacao"];
$tempoMej = $_POST["tempoMej"];
$senha  = $_POST ["senha"];
$idQuarto = $_POST["idQuarto"];
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect("eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("Participante",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

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
