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

        require("connectDB.php");

        $query = "INSERT INTO Participante (nomeCompleto, nomeCracha, email, telefone,
				  uf, cpf, federacao, cargo,
						senha, tempoMej, idEj, idQuarto) 
VALUES ('$nomeCompleto', '$nomeCracha', '$email', '$tel', '$estado', '$cpf', '$federacao',
					 '$cargo' ,  '$senha', '$tempoMej', '$idEj' , '$idQuarto')";

        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?> 
    </body>
</html>

