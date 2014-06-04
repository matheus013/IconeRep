<html>
    <body>
        <?php
//Recebendo o id do usuário via URL
        $idEJ = $_GET['idEJ'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM EJ WHERE idEJ = '$idEJ'");

        while ($ej = mysqli_fetch_array($query)) {
            ?>

            <div id="profile">
                Nome da EJ: <?php echo $ej['nomeEJ']; ?><br>
            </div>


            <?php
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>




