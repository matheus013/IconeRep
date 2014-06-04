<html>
    <body>
        <?php
// Obtendo id via url
        $idQuarto = $_GET['idQuarto'];

        include 'connectDB.php';

        mysql_query("DELETE FROM Quarto WHERE idQuarto= '$idQuarto'");

        mysql_close();

        echo "Cadastro excluido com com sucesso.";
        ?>
    </body>
</html>
