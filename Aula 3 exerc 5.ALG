Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
numero : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
escreval("Escreva um n�mero:")
leia(numero)

se (numero %3 =0) e (numero %5 =0) entao
escreval("Este n�mero � divis�vel por 3 e 5!")
senao
se numero %3 <>0 entao
escreval("Este n�mero n�o � divis�vel por 3!")
senao
escreval("Este n�mero � divis�vel por 3!")
se numero %5 <>0 entao
escreval("Este n�mero n�o � divis�vel por 5!")
senao
escreval("Este n�mero � divis�vel por 5!")
fimse
fimse
fimse

Fimalgoritmo