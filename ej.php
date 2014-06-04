<html>
    <body>
        <?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
        $nomeEJ = $_POST ["nomeEJ"];
//Gravando no banco de dados !

        include 'connectDB.php';

        $query = "INSERT INTO EJ (nomeEJ) 
VALUES ('$nomeEJ')";

        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?> 
    </body>
</html>

