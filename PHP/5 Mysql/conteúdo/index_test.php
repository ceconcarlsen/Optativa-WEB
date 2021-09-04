<?php

	$dbhost = 'localhost';

	$dbuser = 'root';
	$dbpass = 'root';

	$conn = new mysqli($dbhost, $dbuser, $dbpass);

	if( $conn->connect_errno ) {
		die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
	}

	echo "Connected successfully <br/>";

	$selected = mysqli_select_db($conn, 'aulaweb');

	$sql = "select id, nome, nasc from estudante where nome like '%a'";
	$result = $conn->query($sql);


	if( $result->num_rows > 0 ) {	
		while( $row = $result->fetch_assoc() ) {
			printf("ID: %s, Nome: %s, Nasc: %s <br/>", $row["id"], $row["nome"], $row["nasc"]);
		}
	} else {
		printf("Não encontrei ninguem :( <br/>");
	}

	if( $conn->errno ) {
		printf($conn->error);		
	}

	mysqli_free_result($result);
	$conn->close();
?>