<html>
    <body>
        <?php
        $nomeProgramacao = $_POST ["nomeProgramacao"];
        $descricao = $_POST ["descricao"];
        $horario = $_POST ["horario"];
        $numVagas = $_POST ["numVagas"];
        $xmlCertificados = $_POST ["xmlCertificados"];

        include 'connectDB.php';

        $query = "INSERT INTO Participante (nomeProgramacao, descricao, horario, numVagas,
		xmlCertificado) 
VALUES ('$nomeCompleto', '$descricao', '$horario', '$numVagas', '$xmlCertificados')";

        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
        mysql_close();
        ?> 
    </body>
</html>