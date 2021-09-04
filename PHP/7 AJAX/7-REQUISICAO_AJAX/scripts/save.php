<?php

$dbhost = 'localhost';

$dbuser = 'root';
$dbpass = 'root';

$conn = new mysqli($dbhost, $dbuser, $dbpass);

if( $conn->connect_errno ) {
    die('Coult not connect: '.$conn->connect_errno.' - '.$conn->connect_error);
}

$selected = mysqli_select_db($conn, 'ajax_web');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuario(nome, email, senha) values ('$nome', '$email', '$senha')";
$result = $conn->query($sql);

$response = array("success" => $result != 0);

echo json_encode($response);

?>