Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/05/2022
Var
// Seção de Declarações das variáveis 
numero : inteiro
cnt : inteiro
soma : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
escreval("Usando enquanto")
cnt <- 1
soma <- 0
 enquanto cnt <=5 faca
  escreval("Digite um número:")
  leia(numero)
  soma <- soma + numero
   cnt <- cnt + 1
   fimenquanto
   escreval("A média dos números é ", soma/5)
 escreval("---------------------")
 escreval("Usando o repita")
 cnt <- 1
 soma <- 0
 repita
  escreval("Digite um número:")
  leia(numero)
  soma <- soma + numero
   cnt <- cnt + 1
   ate cnt > 5
  escreval("A média dos números é ", soma/5)
  escreval("-------------------")
  escreval("Usando o para")
  soma <- 0
  para cnt de 1 até 5 passo 1 faca
      escreval("Digite um número:")
      leia (numero)
      soma <- soma + numero
   fimpara
   escreval("A média dos números é ", soma/5)



Fimalgoritmo