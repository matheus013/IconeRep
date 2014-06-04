<html>
    <body>
        <?php
//Recebendo o id do usuário via URL
        $idHotel = $_GET['idHotel'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Hotel WHERE idHotel = '$idHotel'");

        while ($hotel = mysqli_fetch_array($query)) {
            ?>

            <div id="profile">
                Hotel: <?php echo $hotel['nomeHotel']; ?><br>
                Endereço: <?php echo $hotel['endereco']; ?><br>
            </div>


            <?php
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>

