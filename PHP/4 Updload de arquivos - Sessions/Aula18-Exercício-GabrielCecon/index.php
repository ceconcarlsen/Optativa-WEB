<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style type="text/css">
       body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
       }
       #div-form{
        width: 300px;
        height: 400px;
        margin-left: auto;
        margin-right: auto;
       }
       hr{
         margin-top: 10px;
         margin-bottom: 10px;
       }
       input{
           margin-top: 10px;
           margin-bottom: 10px;
           margin-left: 10px;
       }
       #submit{
          display: block;
          margin-left: auto;
          margin-right: auto;

          text-decoration: none;
          cursor: pointer;

          background-color:black;
          color: white;

          height: 30px;
          width: 80px;

          font-size: medium
       }
    
       #submit:hover{
           background-color: white;
           color: black;
       }
    </style>

</head>
<body>   
    <?php

        $msg1 = "";
        $msg2 = "";   

         /* define o limitador de cache para 'private' */
         session_cache_limiter('private');
         $cache_limiter = session_cache_limiter();
 
         /* define o prazo do cache em 30 minutos */
         session_cache_expire(30);
         $cache_expire = session_cache_expire();
 
         /* inicia a sessão */
         session_start(); 
 
         if(!isset($_SESSION)){
             echo "[SESSION ERROR]";
         }

         if (isset($_POST['name']) && !empty($_POST['password'])) {

            $msg1 = "Olá ".$_POST['name'].", seu login foi efetuado com sucesso.<br/>";
            $msg2 = "<br/>Reiniciando em 5 segundos :}";
            
            header('Refresh: 5; URL = index.php');
         }
?>

    <div id="div-form">
        <h1>LOGIN</h1>

        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"" method="POST">
            <label for="name">Nome</label>
            <input type="text" name="name">
            <br>
            <label for="password">Senha</label>
            <input type="password" name="password">
            <input type="submit" name="submit" id="submit" value="Enviar">
        </form>
        <hr>

        <h3>
            <?php 
             echo $msg1;  
             echo $msg2;
            ?>
        </h3>
    </div>
</body>
</html>