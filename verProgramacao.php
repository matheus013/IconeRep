<html>
    <body>
        <?php
//Recebendo o id do usuário via URL
        $idProgramacao = $_GET['idProgramacao'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Programacao WHERE idPprogramacao = '$idProgramacao'");

        while ($programacao = mysqli_fetch_array($query)) {
            ?>

            <div id="profile">
                Nome do evento: <?php echo $programacao['nomeProgramacao']; ?><br>
                Descrição: <?php echo $programacao['descricao']; ?><br>
                Horário: <?php echo $programacao['horario']; ?><br>
                Número de Vagas: <?php echo $programacao['numVagas']; ?><br>
            </div>


            <?php
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>




