
var enviar = document.getElementById("enviar");
enviar.setAtribute('onclick','exibirDadosDigitados()')

function exibirDadosDigitados(){

var nome = document.getElementById("nome").Value
var email = document.getElementById("email").Value
var telefone = document.getElementById("telefone").Value
var mensagem = document.getElementById("mensagem").Value


    alert(
        `-nome: ${nome} 
        - email: ${email} 
        - telefone: ${telefone}
        - mensagem: ${mensagem}
        `
    )
}