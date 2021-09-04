let body = document.querySelector("body")
body.backgroundColor = "black"
body.style.margin = "0"
body.style.border = "0"

//NAV-----------------------------------------------------------------
let nav = document.createElement("nav")
nav.style.width = "85%"
nav.style.height = "100vh"
nav.style.backgroundColor = "#5EA4BF"
nav.style.float = "right"


nav.style.display = "grid"
nav.style.gridTemplateColumns = "auto auto auto auto"
nav.style.gridTemplateRows = "auto auto auto "

nav.style.gridColumnGap = "50px"
nav.style.gridRowGap = "30px"


const vetorCores = [
    "AliceBlue",
    "AntiqueWhite",
    "Aqua",
    "Aquamarine",
    "Azure",
    "Beige",
    "Bisque",
    "Black",
    "BlanchedAlmond",
    "Blue",
    "BlueViolet",
    "Brown",
    "BurlyWood",
    "CadetBlue",
    "Chartreuse",
    "Chocolate",
    "Coral",
    "CornflowerBlue",
    "Cornsilk",
    "Crimson",
    "Cyan",
    "DarkBlue",
    "DarkCyan",
    "DarkGoldenRod",
    "DarkGray",
    "DarkGrey",
    "DarkGreen",
    "DarkKhaki",
    "DarkMagenta",
    "DarkOliveGreen",
    "DarkOrange",
    "DarkOrchid",
    "DarkRed",
    "DarkSalmon",
    "DarkSeaGreen",
    "DarkSlateBlue",
    "DarkSlateGray",
    "DarkSlateGrey",
    "DarkTurquoise",
    "DarkViolet",
    "DeepPink",
    "DeepSkyBlue",
    "DimGray",
    "DimGrey",
    "DodgerBlue",
    "FireBrick",
    "FloralWhite",
    "ForestGreen",
    "Fuchsia",
    "Gainsboro",
    "GhostWhite",
    "Gold",
    "GoldenRod",
    "Gray",
    "Grey",
    "Green",
    "GreenYellow",
    "HoneyDew",
    "HotPink",
    "IndianRed",
    "Indigo",
    "Ivory",
    "Khaki",
    "Lavender",
    "LavenderBlush",
    "LawnGreen",
    "LemonChiffon",
    "LightBlue",
    "LightCoral",
    "LightCyan",
    "LightGoldenRodYellow",
    "LightGray",
    "LightGrey",
    "LightGreen",
    "LightPink",
    "LightSalmon",
    "LightSeaGreen",
    "LightSkyBlue",
    "LightSlateGray",
    "LightSlateGrey",
    "LightSteelBlue",
    "LightYellow",
    "Lime",
    "LimeGreen",
    "Linen",
    "Magenta",
    "Maroon",
    "MediumAquaMarine",
    "MediumBlue",
    "MediumOrchid",
    "MediumPurple",
    "MediumSeaGreen",
    "MediumSlateBlue",
    "MediumSpringGreen",
    "MediumTurquoise",
    "MediumVioletRed",
    "MidnightBlue",
    "MintCream",
    "MistyRose",
    "Moccasin",
    "NavajoWhite",
    "Navy",
    "OldLace",
    "Olive",
    "OliveDrab",
    "Orange",
    "OrangeRed",
    "Orchid",
    "PaleGoldenRod",
    "PaleGreen",
    "PaleTurquoise",
    "PaleVioletRed",
    "PapayaWhip",
    "PeachPuff",
    "Peru",
    "Pink",
    "Plum",
    "PowderBlue",
    "Purple",
    "RebeccaPurple",
    "Red",
    "RosyBrown",
    "RoyalBlue",
    "SaddleBrown",
    "Salmon",
    "SandyBrown",
    "SeaGreen",
    "SeaShell",
    "Sienna",
    "Silver",
    "SkyBlue",
    "SlateBlue",
    "SlateGray",
    "SlateGrey",
    "Snow",
    "SpringGreen",
    "SteelBlue",
    "Tan",
    "Teal",
    "Thistle",
    "Tomato",
    "Turquoise",
    "Violet",
    "Wheat",
    "White",
    "WhiteSmoke",
    "Yellow",
    "YellowGreen",
  ];

function myFunctionDiv(){

    let div = document.createElement("div")
    let random = Math.floor(Math.random() * vetorCores.length); 

    div.style.backgroundColor = vetorCores[random]
    div.style.border = "solid 30px #5EA4BF"
    
    nav.appendChild(div)
}

myFunctionDiv()
myFunctionDiv()
myFunctionDiv()
myFunctionDiv()
myFunctionDiv()
myFunctionDiv()

//ASIDE-----------------------------------------------------------------
let aside = document.createElement("aside")
aside.style.width = "15%"
aside.style.height = "100vh"
aside.style.backgroundColor = "#366873"
aside.style.display = "inline-block"


body.appendChild(aside)
body.appendChild(nav)

//aside > ul 
let ul = document.createElement("ul")
ul.setAttribute("id", "my-ul")
aside.appendChild(ul)

//ul > li
let vetor = [ "Cachorro", "Peixe", "Gato",  "Pato", "Baleia", "Tigre", "Leão", "Jacaré",
     "Zebra", "Elefante","Cavalo", "Urso"]

function myFunctionLi(item){
    let li = document.createElement("li")
    let elemento = document.createTextNode(`${item}`)
    li.appendChild(elemento)

    //li style
    li.style.fontSize = "30px"
    li.style.paddingBottom = "25px"
    li.style.marginLeft = "10px"
    li.style.color = "#44C1F2"
    li.style.fontFamily = "FreeMono, monospace"
    li.style.fontStyle = "italic"
    li.style.fontWeight = "bold"

    document.getElementById("my-ul").appendChild(li)
}

//Para cada string do vetor chama a myFunctionLi
vetor.forEach(myFunctionLi)
//-----------------------------------------------------------------

