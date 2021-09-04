<?php
	$dbhost = 'localhost';

	$dbuser = '';
	$dbpass = '';

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if( $conn->connect_errno ) {
		die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
	}

	echo "Connected successfully <br/>";

	if( $conn->query("drop database aulaweb;") ) {
		printf("Consegui remover o BD aulaweb <br/>");
	}

	if( $conn->errno ) {
		printf("Não consegui remover o database: %s <br/>", $mysqli->error);
	}

	$conn->close();
?>