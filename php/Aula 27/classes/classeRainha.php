<?php

namespace Classes;

use InvalidArgumentException;

/**
 * Rainha - pode movimentar-se em qualquer posição
 * na quantidade desejada casas.
 */
class Rainha extends Peca{
    protected function testaMovimento($lin, $col)
    {
     if(!
     (
        $this->posicaoLin==$lin && $this->posicaoCol!=$col ||
        $this->posicaoLin!=$lin && $this->posicaoCol==$col ||
        abs($lin-$col) == abs($this->posicaoLin-$this->posicaoCol) ||
            $lin+$col == $this->posicaoLin + $this->posicaoCol
     )
    )
    {
        throw new InvalidArgumentException("Movimento inválido!")
    }
    }
    
}