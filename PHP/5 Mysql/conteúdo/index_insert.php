<!DOCTYPE html>
<html>
	<head>
		<title>Adicionar novo/a estudante</title>
	</head>
	<body>
		<?php

			if( isset($_POST['nome']) ) {

				$dbhost = 'localhost';

				$dbuser = 'asddsa';
				$dbpass = 'asdasds';

				$conn = new mysqli($dbhost, $dbuser, $dbpass);

				if( $conn->connect_errno ) {
					die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
				}

				echo "Connected successfully <br/>";

				$selected = mysqli_select_db($conn, 'aulaweb');

				$nome = $_POST['nome'];
				$nasc = $_POST['nasc'];

				$sql = "insert into estudante".
							"(nome, nasc) values ('$nome', '$nasc')";

				if( $selected && $conn->query($sql) ) {
					printf("Consegui adicionar estudante. <br/>");
				}

				if( $conn->errno ) {
					printf("Não consegui adicionar estudante! <br/>");
					printf($conn->error);		
				}

				$conn->close();


			} else {

				// continua 
		?>

		<form method="post" action="<?php $_PHP_SELF; ?>">
			
			<table>
				
				<tr>
					<td width="100">Nome</td>
					<td><input type="text" name="nome" id="nome"></td>
				</tr>

				<tr>
					<td width="100">Data de Nascimento [aaaa-mm-dd]</td>
					<td><input type="text" name="nasc" id="nasc"></td>
				</tr>

				<tr>
					<td width="100"></td>
					<td></td>
				</tr>

				<tr>
					<td width="100"></td>
					<td><input type="submit" name="add" value="Adicionar estudante"></td>
				</tr>

			</table>

		</form>

		<?php 

			}
		?>



	</body>
</html>


