//Perguntas
let nome = prompt("Qual o seu nome ?")
let idade = parseInt(prompt("Qual a sua idade ?"))
let peso = parseFloat(prompt("Qual o seu peso ?"))
peso = peso.toFixed(2)
let altura = parseInt(prompt("Qual a sua altura ? (cm)"))
let sexo = prompt("Qual o seu sexo ?")
sexo = sexo.toUpperCase()

//Salvar em Objeto
let objeto = {
    nome: nome,
    idade: idade,
    peso: peso,
    altura: altura,
    sexo: sexo
}

//Alerta
alert(`Dados do Usuário\n\n` + `Nome: ${objeto.nome}\n` + `Idade: ${objeto.idade}\n` + `Peso: ${objeto.peso}\n`
+ `Altura: ${objeto.altura/100}\n` + `Sexo: ${objeto.sexo}\n`)

