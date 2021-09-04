<?php
	$dbhost = 'localhost';

	$dbuser = '';
	$dbpass = '';

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if( $conn->connect_errno ) {
		die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
	}

	echo "Connected successfully <br/>";

	$sql = "create table estudante ( ".
		   "  id int not null auto_increment, ".
		   "  nome varchar(100) not null, ".
		   "  nasc DATE, ".
		   "  primary key(id));";

	$selected = mysqli_select_db($conn, 'aulaweb');

	if( $selected && $conn->query($sql) ) {

		printf("Adicionei tabela estudante. <br/>");

	}

	if( $conn->errno ) {

		printf("Não consegui criar a tabela! <br/>");
		printf($conn->error);
		
	}

	$conn->close();
?>