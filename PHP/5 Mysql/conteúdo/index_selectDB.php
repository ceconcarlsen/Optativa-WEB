<?php
	$dbhost = 'localhost';

	$dbuser = '';
	$dbpass = '';

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if( $conn->connect_errno ) {
		die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
	}

	echo "Connected successfully <br/>";

	if( $conn->query("create database aulaweb;") ) {

		printf("BD aulaweb criado! <br/>");

		$value = mysqli_select_db($conn, 'aulaweb');
		if( !$value ) {
			die("Não consegui selecionar o banco! ".$conn->error);
		}

		print("Banco selecionado com sucesso! <br/>");
		$conn->close();
	}
?>