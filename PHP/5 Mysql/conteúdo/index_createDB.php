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
		printf("Consegui criar o BD aulaweb <br/>");
	}

	if( $conn->errno ) {
		printf("Não consegui criar database: %s <br/>", $mysqli->error);
	}

	$conn->close();
?>