Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis 
numero : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
escreval("Escreva um número:")
leia(numero)

se (numero %3 =0) e (numero %5 =0) entao
escreval("Este número é divisível por 3 e 5!")
senao
se numero %3 <>0 entao
escreval("Este número não é divisível por 3!")
senao
escreval("Este número é divisível por 3!")
se numero %5 <>0 entao
escreval("Este número não é divisível por 5!")
senao
escreval("Este número é divisível por 5!")
fimse
fimse
fimse

Fimalgoritmo