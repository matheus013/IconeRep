<html>
<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	
$email	= $_POST ["email"];	
$tel	= $_POST ["telefone"];	
$cidade	= $_POST ["cidade"];	
$estado	= $_POST ["estado"];	
$ej     = $_POST ["ej"];
$cargo  = $_POST ["cargo"];
$senha  = $_POST ["senha"];
$news	= $_POST ["news"];	
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect("eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("Cadastro",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

$query = "INSERT INTO `Cadastro` ( `nome` , `email` , `telefone` ,
				  `cidade` , `estado` , 'ej' , 'cargo' ,
						 `senha` , `news` , `id` ) 
VALUES ('$nome', '$email', '$tel', '$cidade', '$estado',
					'$ej'  , '$cargo' ,  '$senha', '$news', '')";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
