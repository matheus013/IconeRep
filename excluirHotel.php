<html>
    <body>
        <?php
// Obtendo id via url
        $idHotel = $_GET['idHotel'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Instrução para deletar o cadastro do banco de dados
        mysql_query("DELETE FROM Hotel WHERE idHotel = '$idHotel' ");

// Terminando conexão com o banco de dados
        mysql_close();

        echo "Cadastro excluido com com sucesso.";
        ?>
    </body>
</html>
