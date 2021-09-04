<?php

    session_start(); #inicia a sessão 

    if( isset($_SESSION['count_visits'])){ #sessão ativa e contador de visitas
        $_SESSION['count_visits'] += 1;
    }
    else{
        $_SESSION['count_visits'] = 1;
    }

    $msg = "Você visitou essa página pela ".$_SESSION['count_visits']."º vez nessa sessão </br>";

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
    
    <?php echo $msg; ?>

</body>
</html>