<html>
    <body>
        <?php
        $nomeCompleto = $_POST ["nomeCompleto"];
        $nomeCracha = $_POST ["nomeCracha"];
        $email = $_POST ["email"];
        $tel = $_POST ["telefone"];
        $estado = $_POST ["estado"];
        $cpf = $_POST["cpf"];
        $idEj = $_POST ["idEj"];
        $cargo = $_POST ["cargo"];
        $federacao = $_POST["federacao"];
        $tempoMej = $_POST["tempoMej"];
        $senha = $_POST ["senha"];
        $idQuarto = $_POST["idQuarto"];
        $idParticipante = $_POST["idParticipante"];

        include 'connectDB.php';

        $query = "UPDATE Participante 
          SET nomeCompleto = '$nomeCompleto', nomeCracha = '$nomeCracha',  
            email = '$email', telefone = '$tel', uf = '$estado', cpf = '$cpf', 
            cargo = '$cargo', senha = '$senha', tempoMej = '$tempoMej', 
            idEj = '$idEj', idQuarto = '$idQuarto'
            WHERE idParticipante = $idParticipante";

        mysql_query($query, $conexao);

        echo "Cadastro atualizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?> 
    </body>
</html>
