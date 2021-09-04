//Introdução
do{
alert("[ JOGO DOS DADOS ]");

//Jogadores
var jogador1 = prompt("1º JOGADOR");
var jogador2 = prompt("2º JOGADOR");

//Inicio
}while (!confirm("Vamos começar ?"));

//Jogo
let soma1 = 0;
let soma2 = 0;

let limite = 50; //O jogador que chegar ao limite vence 

    for(let i=1;i<=limite;i++){ //Ao máximo limite rodadas, pois é possível tirar 1 em todas as jogadas

        //Sorteamento dos dados (valores 1 à 6)
        let valor1a = Math.floor(Math.random() * 6) + 1;  
        let valor1b = Math.floor(Math.random() * 6) + 1;
        let valor2a = Math.floor(Math.random() * 6) + 1;  
        let valor2b = Math.floor(Math.random() * 6) + 1;

        alert(`RODADA Nº [${i}]\n\n` + `DADOS SORTEADOS\n\n` + `${jogador1}  ${valor1a} ${valor1b}\n` + `${jogador2}  ${valor2a} ${valor2b}`);

        soma1 +=  valor1a + valor1b;
        soma2 +=  valor2a + valor2b;

        alert(`RESUMO DAS RODAS\n\n` + `PONTUAÇÃO\n\n` + `${jogador1} ${soma1}\n` + `${jogador2} ${soma2}\n`);

        if(soma1 >= limite || soma2 >= limite)break;
    }

//Análise do vencedor
if(soma1 >= limite){
    alert(`FIM DE JOGO\n\n` + `VENCEDOR  ${jogador1}` + ` :)`)
}
else if(soma2 >=limite){
    alert(`FIM DE JOGO\n\n` + `VENCEDOR  ${jogador2}` + ` :)`)
}
else{
    alert(`FIM DE JOGO\n\n` + `EMPATE` + ` :/`)
}



    