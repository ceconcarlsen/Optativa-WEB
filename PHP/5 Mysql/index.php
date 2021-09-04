<?php

//CONEXÃO
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';

    $conn = new mysqli($dbhost, $dbuser, $dbpass);

    if($conn->connect_errno){
        die('could not connect:'.$conn->connect_errno. ' - '.$conn->connect_error);
    }

    echo "Connected Successfully <br/>";
 
//CRIAÇÃO
    if($conn->query("create database aulaweb;")){ #create ou drop
        printf("Consegui criar o DB aulaweb <br/>");
    }
    if($conn->errno){
        printf("Não consegui criar o DB: %s <br/>", $conn->error);
    }

//SELEÇÃO
    if(mysqli_select_db($conn,"aulaweb")){
        echo "BD aulaweb selecionado <br/>";
    }
    else{
        echo "BD aulaweb não foi selecionado";
    }
//MANIPULAÇÃO

    $sql = "create table estudante (".
           " id int not null auto_increment, ". 
           " nome varchar(100) not null, ".
           " nasc DATE, ".
           " primary key(id));";
    
    $selected = mysqli_select_db($conn,"aulaweb");

    if ($selected && $conn->query($sql)){
        printf("Adicionei a tabela estudante <br/>");
    }

    if($conn->errno){
        printf("Não consegui adicionar a tabela estudante ");
        printf($conn->error);
    }

//FECHANDO CONEXÃO
    $conn->close();

?>
