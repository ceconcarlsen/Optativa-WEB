<?php

if($_SERVER["RESQUEST_METHOD"] == "POST" && ($_POST['name'] || $_POST['age']) ){
    
    if(preg_match("/[^A-Za-z]/", $_POST["name"]) ){
        die("Nome inválido, precisa conter letras");
    }

    echo("Bem-vindo".$_POST["name"]."</br>");
    echo("Você tem".$_POST["agr"]."anos </br>");

    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">  <!-- ação está nesse mesmo arquivo !-->
        Nome: <input type="text" name="name">
        Idade: <input type="text" name="age">
        <input type="submit" name="Enviar">
    </form>
</body>
</html>