<?php

namespace Classes;

use InvalidArgumentException;

/**
 * Torre - pode movimentar quantas casas desejar 
 * desde que seja em linha reta,ou seja, na linha
 * ou na coluna
 */

 class Torre extends Peca{
    protected function testaMovimento($lin, $col)
    {
      if ($this->posicaoLin!=$lin && $this->posicaoCol!=$col)
      {
        throw new InvalidArgumentException("Movimento inválido!");
      }
    }
 }