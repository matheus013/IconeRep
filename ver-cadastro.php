<html>
<body>
<?php
//Recebendo o id do usuário via URL
$id = $_GET['id'];

// Estabelecendo conexão com banco de dados
include 'connectDB.php';

// Obtendo informações do usuário
$query = mysql_query("SELECT * FROM Participante WHERE id = $id");
$user = mysqli_fetch_array($query);
?>
    
<div id="profile">
    Nome completo: <?php echo $user['nomeCompleto']; ?><br>
    Nome no cracha: <?php echo $user['nomeCracha']; ?><br>
    Email: <?php echo $user['email']; ?><br>
    Telefone: <?php echo $user['tel']; ?><br>
    UF: <?php echo $user['estado']; ?><br>
    CPF: <?php echo $user['cpf']; ?><br>
    Cargo: <?php echo $user['cargo']; ?><br>
    Federacao: <?php echo $user['federacao']; ?><br>
    Tempo de MEJ: <?php echo $user['tempoMej']; ?><br>
</div>
    
    
    <?php mysql_close(); ?>
</body>    
</html>




