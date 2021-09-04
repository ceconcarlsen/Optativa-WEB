/* XMLHttp
var myRequest = new XMLHttpRequest();
//GET
myRequest.open("GET", "https://httpbin.org/get");
myRequest.send();


//POST
let objeto = {
    nome: "Gabriel",
    idade: 21
}
myRequest.open("POST", "https://api.github.com");
myRequest.setRequestHeader('contet-type', 'application/json')
myRequest.send(JSON.stringify(objeto))


myRequest.addEventListener('readystatechange', function(event){

    if(myRequest.readyState === XMLHttpRequest.DONE) {

    var data = event.target.responde;
    console.log(data)
    var obj = JSON.parse(data)
    console.log(obj)
    }

})
*/

/*
Objeto fetch com (url, {method: }).then (quando a resposta do servidor chegar) function(response) e
funtion (data) para tratamento dos dados
fetch ("https://httpbin.org/get",
    {
        method: "GET"
    }
).then(function(response){
    return response.json();
}).then(function(data){
    console.log(data)
})

//POST
var form = new FormData(document.getElementById('login-form'))

fetch ("https://httpbin.org/post", {
    method: "POST",
    body: form
}).then(function(response){
    return response.json();
}).then(function(data){
    console.log(data)
})
*/

//Working with fecth

/*GET 
-> SUCCESS https://reqres.in/api/users/
-> NOT SUCCESS https://reqres.in/api/users/900
*/

fetch("https://reqres.in/api/users/").then(response =>{
    if(response.ok){
    console.log("SUCCESS")
    return response.json();
    }
    else{
        console.log("NOT SUCCESS")
    }
}).then(data =>{
    console.log(data)
})

//POST
let objeto = {
    "name": "gabriel",
    "job": "student"
}

fetch("https://reqres.in/api/users", {
    method: "POST",
    headers: {
        "Content-type": "application/json"
    },
    body: JSON.stringify(objeto)
}).then(response =>{
    return response.json();
}).then(data =>{
    console.log(data)
})
