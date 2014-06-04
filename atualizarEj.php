<html>
    <body>
        <?php
        $nomeEJ = $_POST ["nomeEJ"];
        $idEJ = $_POST["idEJ"];

        include 'connectDB.php';

        $query = "UPDATE EJ 
          SET nomeEJ = '$nomeEJ'   
          WHERE idEJ = '$idEJ'";

        mysql_query($query, $conexao);

        echo "Empresa Júnior atualizada com sucesso!<br>Agradecemos a atenção.";

        mysql_close();
        ?>

    </body>    
</html>
