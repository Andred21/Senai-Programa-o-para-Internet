Algoritmo "semnome"
// Disciplina   : [UC4 - L�gica de Programa��o]
// Professor   : Richard Brosler
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
Var
   // Se��o de Declara��es das vari�veis
   strCPF : caractere
   bolTeste : logico
   intSoma, intI, intBase, intDigito : inteiro
   intDgV1, intDgV2 : inteiro
Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreval("Programa validador de CPF")
   escreval("Digite o n�mero do CPF sem pontua��o:")
   leia(strCPF)
   bolTeste := (strCPF = "00000000000")
   bolTeste := bolTeste ou (strCPF = "11111111111")
   bolTeste := bolTeste ou (strCPF = "22222222222")
   bolTeste := bolTeste ou (strCPF = "33333333333")
   bolTeste := bolTeste ou (strCPF = "44444444444")
   bolTeste := bolTeste ou (strCPF = "55555555555")
   bolTeste := bolTeste ou (strCPF = "66666666666")
   bolTeste := bolTeste ou (strCPF = "77777777777")
   bolTeste := bolTeste ou (strCPF = "88888888888")
   bolTeste := bolTeste ou (strCPF = "99999999999")

   se ( bolTeste ) ou (compR(strCPF)<> 11) entao
      escreval("CPF inv�lido!")
   senao
      intSoma := 0
      intBase := 11
      para intI de 1 ate 9 faca
         intDigito := caracpnum(copia(strCPF,intI,1))
         intSoma := intSoma + intDigito *(intBase - intI)
      fimpara
      intDgV1 := 11 - intSoma mod 11
      se intDgV1>9 entao
         intDgV1 := 0
      fimse
      intSoma := 0
      intBase := 12
      para intI de 1 ate 10 faca
         intDigito := caracpnum(copia(strCPF,intI,1))
         intSoma := intSoma + intDigito *(intBase - intI)
      fimpara
      intDgV2 := 11 - intSoma mod 11
      se intDgV2>9 entao
         intDgV2 := 0
      fimse
      se ( caracpnum(copia(strCPF,10,1))<>intDgV1 ) ou ( caracpnum(copia(strCPF,11,1))<>intDgV2 ) entao
         escreval("CPF inv�lido")
      senao
         escreval("CPF v�lido")
      fimse
   fimse

Fimalgoritmo