<html>
    <body>
        <?php
        $nomeProgramacao = $_POST ["nomeProgramacao"];
        $descricao = $_POST ["descricao"];
        $horario = $_POST ["horario"];
        $numVagas = $_POST ["numVagas"];
        $xmlCertificados = $_POST ["xmlCertificados"];
        $idProgramacao = $_POST ["idProgramacao"];

        include 'connectDB.php';

        $query = "UPDATE Programacao 
          SET nomeProgramacao = '$nomeProgramacao', descricao = '$descricao', horario = '$horario', 
              numVagas = '$numVagas', xmlCertificado = '$xmlCertificados'  
          WHERE idProgramacao = '$idProgramacao'";

        mysql_query($query, $conexao);

        echo "Programação atualizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?>

    </body>    
</html>
