<?php

    function listUsers() {
        $dbhost = 'localhost';

        $dbuser = 'root';
        $dbpass = 'root';

        $conn = new mysqli($dbhost, $dbuser, $dbpass);

        if( $conn->connect_errno ) {
            die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
        }

        $selected = mysqli_select_db($conn, 'ajax_web');

        $sql = "select * from usuario";
        $result = $conn->query($sql);
        echo $result->num_rows;
        if( $result->num_rows > 0 ) {
            $table_data = "";
        
            while( $row = $result->fetch_assoc() ) {
                $table_data .= "<tr><td>".$row["id_usuario"]."</td>";
                $table_data .= "<td>".$row["nome"]."</td>";
                $table_data .= "<td>".$row["email"]."</td></tr>";
            }
            echo $table_data;        
        } 
    }
?>


<html>
    <head>
        <meta charset='utf-8'>

        <link rel="stylesheet" href="css/style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <a href="#janela" rel="modal">Novo Usuário</a>

        <div id="lista">
            <table callpadding="3px" callspacing="0">
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Email</td>
                </tr>

                <?php listUsers(); ?>
            </table>

            <div class="window" id="janela">
                <a href="#" class="close">X Close</a>
                <h4>Add User</h4>
                <form id="addUser" action="" method="post">
                    <label for="nome">Name:</label> <input type="text" name="nome" id="nome">
                    <label for="email">Email:</label> <input type="text" name="email" id="email">
                    <label for="senha">Senha:</label> <input type="password" name="senha" id="senha">

                    <br>
                    <input type="button" value="Save" id="save">
                </form>

        </div>
    </body>

</html>