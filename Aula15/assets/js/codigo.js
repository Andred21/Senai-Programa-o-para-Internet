// Buscando componentes
// Buscando o formulário do documento
const form = document.querySelector("form");
const btnPesqCep = document.querySelector("#pesqCep");
const cmpCep = document.querySelector("#cep");
const cmpCidade = document.querySelector("#cidade");
const cmpEndereco = document.querySelector("#endereco");
const cmpEstado = document.querySelector("#estado");
const cmpBairro = document.querySelector("#bairro");

// Colocando o eventos
form.addEventListener("submit",(evt)=>testarFormulario(evt,form));
btnPesqCep.addEventListener("click",()=>{
  alert("pesquisando o cep e preenchendo os valores! :-)");
  if (cmpCep.value != ""){
    pesquisaCep(cmpCep.value).then(retornoCep=>{
      if (retornoCep!=null){
        cmpEndereco.value = retornoCep.logradouro;
        cmpBairro.value = retornoCep.bairro;
        cmpCidade.value = retornoCep.localidade;
        cmpEstado.value = retornoCep.uf;
      }
    })
  }
})

// Funções do sistema
// Criando a função para testar os dados de envio do formulário
function testarFormulario(evento,frm){
  let ret = false;

  // fazer os testes aqui
  const msgErros = document.querySelector(".msgErros");
  //Limpando mensagens de erro
  msgErros.innerHTML = "";
  //Podemos testar no formilário que é passado na função
  if (frm["nome"].value=="")
      msgErros.innerHTML += "<li>Campo Nome Vazio</li>"
  if (frm["cpf"].value=="")
      msgErros.innerHTML += "<li>Campo Cpf Vazio</li>" 
  if (frm["nascimento"].value=="")
      msgErros.innerHTML += "<li>Campo Data de Nascimento Vazio</li>" 
  if (frm["sexo"].value=="")
      msgErros.innerHTML += "<li>Escolha um sexo</li>"
  if (frm["telefone"].value=="")
      msgErros.innerHTML += "<li>Campo Telefone Vazio</li>"
  if (frm["celular"].value=="")
      msgErros.innerHTML += "<li>Campo Celular Vazio</li>"
  if (frm["email"].value=="")
      msgErros.innerHTML += "<li>Campo Email Vazio</li>"
  if (frm["cep"].value=="")
      msgErros.innerHTML += "<li>Campo Cep Vazio</li>"
  if (frm["endereco"].value=="")
      msgErros.innerHTML += "<li>Campo Endereço Vazio</li>"
  if (frm["nro"].value=="")
      msgErros.innerHTML += "<li>Digite o Número do Endereço</li>"
  if (frm["bairro"].value=="")
      msgErros.innerHTML += "<li>Campo Bairro Vazio</li>"
  if (frm["cidade"].value=="")
      msgErros.innerHTML += "<li>Campo Cidade Vazio</li>"
  if (frm["estado"].value=="")
      msgErros.innerHTML += "<li>Campo Estado Vazio </li>"
  if (msgErros.innerHTML=="") ret=true;
  
  
  
  
  
  //fim do código
  if (!ret) 
    evento.preventDefault();
  else
    alert("Gravado com sucesso");
}
// Função de pesquisa de cep
async function pesquisaCep(cep){
  return new Promise(async (resolve, reject)=>{
    let url=`https://viacep.com.br/ws/${cep}/json/`;
    fetch(url).then(res=>res.json()).then(out=> {
      resolve(out);
    }).catch(erro=>{reject(erro)})
  
  }) 
}