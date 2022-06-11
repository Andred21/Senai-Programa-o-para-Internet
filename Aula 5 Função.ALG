Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022

funcao verificaCPF(strCPF : caractere) : logico

var
   bolTeste : logico
   bolRet: logico
   intSoma, intBase, intI: inteiro
   intDigito, intDgV1, intDgv2 : inteiro
inicio
   bolRet := falso
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
      escreval("CPF inválido!")
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
         bolRet := falso
      senao
         bolRet := verdadeiro
      fimse
   fimse
   retorne bolret
fimfuncao

Var
   // Seção de Declarações das variáveis
   strCPFDig : caracter


Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
   escreval("Usando função")
   escreval("Digite seu cpf somente números:")
   leia(strCPFDig)
   se verificaCPF(strCPFDig) entao
      escreval("CPF é Válido!")
   senao
      escreval("CPF é Inválido!")
   fimse
Fimalgoritmo