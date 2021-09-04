<?php
	$dbhost = 'localhost';

	$dbuser = '';
	$dbpass = '';

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if( $conn->connect_errno ) {
		die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
	}

	echo "Connected successfully <br/>";

	$sql = "drop table estudante;";

	$selected = mysqli_select_db($conn, 'aulaweb');

	if( $selected && $conn->query($sql) ) {
		printf("Removi tabela estudante. <br/>");
	}

	if( $conn->errno ) {
		printf("Não consegui remover a tabela! <br/>");
		printf($conn->error);		
	}

	$conn->close();
?>