<?php

namespace Classes;

use InvalidArgumentException;
 
/**
 * Bispo - Pode movimentar-se em qualquer diagonal que 
 * ele esteja, quantas casa desejar 
 */
 class Bispo extends Peca{
    protected function testaMovimento($lin, $col)
    {
        if($this->posicaoLin==$lin || $this->posicaoCol==$col)
        {
            throw new InvalidArgumentException("Movimento não permitido!");
        }
    }
 }