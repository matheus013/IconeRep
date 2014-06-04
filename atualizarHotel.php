<html>
    <body>
        <?php
        $nome = $_POST ["nomeHotel"];
        $endereco = $_POST ["endereco"];
        $idHotel = $_POST["idHotel"];

        include 'connectDB.php';

        $query = "UPDATE Hotel 
          SET nome = '$nome' , endereco = '$endereco'  
          WHERE idHotel = '$idHotel'";

        mysql_query($query, $conexao);

        echo "Hotel atualizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?>

    </body>    
</html>
