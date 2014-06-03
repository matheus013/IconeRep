<html>
<body>
<?php

// Obtendo id via url
$id = $_GET['id'];

// Estabelecendo conexão com banco de dados
include 'connectDB.php';

// Instrução para deletar o cadastro do banco de dados
mysql_query("DELETE FROM Hotel WHERE id= $id ");

// Terminando conexão com o banco de dados
mysql_close();

echo "Cadastro excluido com com sucesso.";
?>
</body>
</html>
