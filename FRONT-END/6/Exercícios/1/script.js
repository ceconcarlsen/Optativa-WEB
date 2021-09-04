let body = document.querySelector("body")
body.style.backgroundColor = "black"
body.style.width = "99vw"
body.style.height = "99vh"
body.style.margin = "0"
body.style.padding = "0"

let div = document.createElement("div")
div.style.width = "40px"
div.style.height = "40px"
div.style.backgroundColor = "red"
div.style.position = "absolute"
div.style.top = "0px"
div.style.left = "0px"
div.style.borderRadius = "50%"

body.appendChild(div)

//Movimentação e Limite
let amount = 20
let somaH = 0
let somaV = 0 

body.addEventListener("keypress", function(event){

    let tecla = event.key
    tecla = tecla.toUpperCase()

    div.style.backgroundColor = "green"
    
    switch(tecla){
        case 'W':   somaV = parseInt(div.style.top) - amount
                    div.style.top = `${somaV}px`;       
                    break;

        case 'A':   somaH = parseInt(div.style.left) - amount
                    div.style.left = `${somaH}px`;
                    break;

        case 'S':   somaV = parseInt(div.style.top) + amount
                    div.style.top = `${somaV}px`;
                    break;

        case 'D':   somaH = parseInt(div.style.left) + amount
                    div.style.left = `${somaH}px`;
                    break;

        default: break;  
    }

    if((somaV < 0 || somaV > 680 ) || (somaH < 0 || somaH > 1480)){
        div.style.top = "0px"
        div.style.left = "0px" 
        div.style.backgroundColor = "red"
        somaH = 0
        somaV = 0
     } 
});
