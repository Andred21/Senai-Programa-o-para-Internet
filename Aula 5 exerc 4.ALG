Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
Var
   // Se��o de Declara��es das vari�veis
   intnSeq : inteiro
   intI, intNumAnt, intNumAntAnt, intApoio : inteiro
Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreval("Sequ�ncia de Fibonacci")
   escreval("Digite o termo desejado da sequ�ncia (maior que 4)")
   leia(intnSeq)
   intNumAnt := 1
   intNumAntAnt := 0
   escreva(intNumAntAnt, ", ",IntNumAnt)
   para IntI de 3 ate IntnSeq faca
   escreva(",", intNumAnt + intNumAntAnt)
   intApoio := intNumAntAnt
   intNumAntAnt := intNumAnt
   intNumAnt := intNumAnt + intApoio
fimpara

Fimalgoritmo