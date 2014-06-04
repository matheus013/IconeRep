<html>
    <body>
        <?php
         $vagas = $_POST ["vagas"];
        $idHotel = $_POST ["idHotel"];
        $quarto = $_POST ["quarto"];
        $idQuarto = $_POST["idQuarto"];

        include 'connectDB.php';

        $query = "UPDATE Quarto 
          SET vagas = '$vagas' , idHotel = '$idHotel', quarto = '$quarto'  
          WHERE idQuarto = '$idQuarto'";

        mysql_query($query, $conexao);

        echo "Quarto atualizado com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?>

    </body>    
</html>
