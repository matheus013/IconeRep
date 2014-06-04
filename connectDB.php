<?php

//conectando com o localhost - mysql
$conexao = mysql_connect("dbmy0102.whservidor.com","eneej2014","iconeUFAL");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("Participante",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

?>
