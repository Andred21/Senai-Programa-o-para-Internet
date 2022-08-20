//const disp= document.getElementById("display");
const disp= document.querySelector("#display");
//Selecionando todos os elementos que estão usando class btn
//const btns= document.getElementsByClassName("btn");
const btns= document.querySelectorAll(".btn");

function minhafuncao(){
// nesse ponto estou buscando no html um item que tem o id chamado display
    alert("O valor do display é "+ disp.innerHTML);
    //disp.innerHTML="Alterei o conteúdo"
}
    
Array.from(btns).forEach(btn => {
    console.log(btn);
    btn.addEventListener("click",()=>{
        alert("Você clicou no btn " + btn.dataset.valor);
        disp.innerHTML = btn.dataset.valor;
    })
});