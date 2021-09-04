<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&display=swap" rel="stylesheet">

    <title>exercício</title>

    <style>

        body{
            font-family:  'Encode Sans SC', sans-serif;
            color: white;
            background: #282A35;
            margin: 0px;
            padding: 0px;
        }
        #div-main{    
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        #div-lista{
            height: 200px;
            width: 400px;

            margin: 0 auto;
        }

    </style>

</head>
<body>

<?php

#CONSOLE.LOG
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG).');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

$lista = '';

    if(!empty($_POST['nome'])){

        #CONEXÃO
        $dbhost = 'localhost';

        $dbuser = 'root';
        $dbpass = 'root';

        $conn = new mysqli($dbhost,$dbuser,$dbpass);

        if($conn->connect_errno){
            die('[ERRO]: Não foi possível conectar:'.$conn->connect_errno.'-'.$conn->connect_error);
        }
        console_log('[SUCESSO]: Conexão criada.');
        console_log($conn->host_info);

        #CRIAÇÃO DO BANCO
        if($conn->query("create database exercicio;")){
            console_log('[SUCESSO]: Banco de dados criado com sucesso.');
        }
        if($conn->connect_errno){
            console_log('[ERRO]: Erro ao criar o banco de dados.');
            console_log($conn->error);
        }

        #CRIAÇÃO DA TABELA
        $sql = "create table funcionario (".
               " id int not null auto_increment primary key, ".  
               " nome varchar(40) not null, ".
               " funcao varchar(10) not null,".
               " salario int);";
               

        #SELEÇÃO DO BANCO
        $selected = mysqli_select_db($conn, 'exercicio');

        if($selected && $conn->query($sql)){
            console_log('[SUCESSO]: Tabela funcionário criada com sucesso.');
        }
        if($conn->errno){
            console_log('[ERRO]: Erro ao criar a tabela funcionário.');
            console_log($conn->error);
        }

        #INSERÇÃO DE DADOS
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $salario = $_POST['salario'];

        

        $sql = "insert into funcionario".
               "(nome, funcao, salario) values ('$nome', '$funcao', '$salario')";
      
        if($selected && $conn->query($sql)){
            console_log('[SUCESSO]: Funcionário <strong>".$nome."</strong> adicionado com sucesso.');
        }
        if($conn->errno){
            console_log('[ERRO]: Erro ao adicionar funcionário.');
            console_log($conn->error);
        }

        #LISTANDO OS DADOS
        $sql = "select id, nome, funcao, salario from funcionario;";
        $result = $conn->query($sql);

        if($selected && $conn->query($sql)){
            console_log('[SUCESSO]: Listando todos os funcionários.');
        }

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
             $lista .= "<br>".$row["id"]. " - " .$row["nome"]. " " . $row["funcao"]. " R$" .$row["salario"]. "<br>";
            }
          } else {
            $lista = "0 funcionários cadastrados.";
          }
        
        $conn->close();    
    }

    unset($_POST);
?>
  <div id="div-main">
      <h1>Adicionando funcionários</h1>
      <h3>(Log de processamento em CTRL + SHIFT + I)</h3>
      <hr>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="form">
			<table>
				<tr>
					<td width="100">Nome</td>
					<td><input type="text" name="nome" id="nome"></td>
				</tr>

				<tr>
					<td width="100">Função</td>
					<td><input type="text" name="funcao" id="funcao"></td>
				</tr>

				<tr>
					<td width="100">Salário</td>
					<td><input type="number" min="0" max="40000" value="0"name="salario" id="salario"></td>
				</tr>

				<tr>
					<td width="100"></td>
					<td><input type="submit" name="add" value="Adicionar/Listar" class="submit"></td>
				</tr>
                <tr>
					<td width="100"></td>
					<td><input type="reset" value="Limpar" name="reset"/></td>
				</tr>
			</table>
            <hr>
            <?php echo $lista; ?>
		</form>
    </div>

</body>
</html>