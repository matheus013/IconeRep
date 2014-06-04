<html>
    <body>
        <?php
        $vagas = $_POST ["vagas"];
        $idHotel = $_POST ["idHotel"];
        $quarto = $_POST ["quarto"];


        include 'connectDB.php';

        $query = "INSERT INTO Quarto (numQuarto, idHotel, numVagas) 

	VALUES('$quarto', '$idHotel','$vagas')";


        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?> 
    </body>
</html>
