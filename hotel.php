<html>
    <body>
        <?php
        $nome = $_POST ["nomeHotel"];
        $endereco = $_POST ["endereco"];

        include 'connectDB.php';

        $query = "INSERT INTO Hotel (nomeHotel,endereco) 

	VALUES('$nome', '$endereco')";


        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?> 
    </body>
</html>
