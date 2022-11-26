<?php
namespace Classes;

use InvalidArgumentException;
/**
 * Peão no xadrez
 * Pode andar 2 casa no movimento inicial
 * Após o movimento inicial,somente 1 casa a frente
 * ou 1 casa na diagonal para capturar peças a sua frente
 */

class Peao extends Peca {
    
    public function __construct($linhaInicial=2,$colInicial=1)
    {
        $this->posicaoLin=$linhaInicial;
        $this->posicaoCol=$colInicial;
        $this->nomePeca = "Peão";
    }

    protected function testaMovimento($lin, $col)
    {
      if(($this->posicaoLin==2 && $lin>4)|| 
         ($this->posicaoCol != $col)||
         ($this->posicaoLin!= 2 && $this->posicaoLin-$lin != 1)

      ){
        throw new InvalidArgumentException("Movimento inválido!");
      }
    }
}