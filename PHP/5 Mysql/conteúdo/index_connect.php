<?php
	$dbhost = 'localhost';

	$dbuser = '';
	$dbpass = '';

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if( $conn->connect_errno ) {
		die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
	}

	echo "Connected successfully <br/>";
	echo $conn->host_info;
?>