<?php	
	# Este é um comentário, e 
	# Este é um segundo comentário.

	// Esse também é um comentário
	// print "Um exemplo com uma linha de impressão<br>";

	// /*
	// 	Este é um comentário
	// 	que contém
	// 	várias linhas
	// */
	// print "Aqui, estou exibindo
	// 	  um texto que tem duas linhas.<br>";



	// $idade = 27;

	// if( $idade >= 18 ) {
	// 	print("Certo, pode dirigir!<br>");
	// } else 
	// 	print("Espere mais 
	// 		um pouco!<br>");


	// // integers
	// $ano = 2021;
	// $mes = 5;
	// $ano_mes = $ano + $mes;
	// print("$ano + $mes = $ano_mes <br>");

	// // doubles
	// $temperatura = 32.1;
	// $chuva = 20.3;

	// // boolean
	// if( TRUE )
	// 	print("Vou sempre imprimir, 
	// 		  até que você coloque FALSE! <br>");


	// // strings
	// $str_longa = "Esta é uma string longa!";
	// $outra_str = 'String com aspas simples';
	// $str_zero = "";


	// define("MENOR_VALOR", -10);


	// // formas de acessar:
	// // note que não é necessário $
	// echo MENOR_VALOR;
	// echo constant("MENOR_VALOR");



	// $week_day = date("D");
	// echo $week_day;
	// if( $week_day == 'Fri' )
	// 	echo 'Have a nice weekend!';
	// elseif( $week_day == 'Sun' )
	// 	echo 'Have a nive Sunday!';
	// else
	// 	echo 'Have a nice day!';



	// $week_day = date('D');

	// switch( $week_day ) {

	// 	case 'Mon':
	// 		echo 'Hoje é segunda!';
	// 		break;

	// 	case 'Tue':
	// 		echo 'Hoje é terça!';
	// 		break;

	// 	default:
	// 		echo 'Pode entre quarta e domingo!';
	// }

	$sum = 0.0;
	define('MAX', 100);

	for( $i = 1; $i <= constant('MAX'); ++$i ) {
		$sum += $i;
	}

	if( $sum == 0.5*constant('MAX')*(constant('MAX')+1) )
		echo 'Gauss was right!';
	else
		echo 'Check the implementation!';



	$i = 0;
	while( $i < constant('MAX') ) {
		$i++;
	}

	$i = 0;
	do {
		$i++;
	} while( $i < constant('MAX') );

	echo "Parei em i = $i<br>";


	$vetor = array(1, 2, 3, 4, 5, 6);
	foreach ($vetor as $value) {
		echo "Valor é $value <br/>";
	}




	/* Primeira forma de definição. */
	$numbers = array(1, 2, 3, 4, 5);

	foreach( $numbers as $value ) {
		echo "O valor é $value <br />";
	}

	/* Segunda forma de definição. */
	$numbers[0] = "um";
	$numbers[1] = "dois";
	$numbers[2] = "três";
	$numbers[3] = "quatro";
	$numbers[4] = "cinco";

	foreach( $numbers as $value ) {
		echo "O valor é $value <br />";
	}


	/* Primeiro método para criar vetor associativo. */
	$salarios = array("karla" => 2000, "larissa" => 1000, "joao" => 500);

	echo "O salário da Karla é ". $salarios['karla'] . "<br />";
	echo "O salário da Larissa é ".  $salarios['larissa']. "<br />";
	echo "O salário do João é ".  $salarios['joao']. "<br />";

	/* Segundo método para criar vetor associativo. */
	$salarios['karla'] = "alto";
	$salarios['larissa'] = "rasoável";
	$salarios['joao'] = "baixo";

	echo "O salário da Karla é ". $salarios['karla'] . "<br />";
	echo "O salário da Larissa é ".  $salarios['larissa']. "<br />";
	echo "O salário do João é ".  $salarios['joao']. "<br />";



	$notas = array( 
        "larissa" => array (
           "physics" => 9.8,
           "math" => 7.3
        ),        
        "karla" => array (
           "physics" => 7.8,
           "math" => 9.9
        )
     );
     
     /* Acessando vetores multidimensionais */
     echo "Nota da Larissa em Física: " ;
     echo $notas['larissa']['physics'] . "<br />"; 
     
     echo "Nota da Karla em Matemática: ";
     echo $notas['karla']['math'] . "<br />"; 
?>