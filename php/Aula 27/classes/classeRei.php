<?php

namespace Classes;

use InvalidArgumentException;
/**
 * Rei- pode andar para qualquer casa 1 posição
 * pode capturar qualquer peça ao alcançe de 1 casa
 * não pode movimentar-se em uma ósição que coloque ele em checkmate
 */

class Rei extends Peca{

    protected function testaMovimento($lin, $col)
    {
        if($this->posicaoLin-$lin != 1 || $this-> posicaoCol-$col != 1 )
        {
            throw new InvalidArgumentException("Movimento inválido!");
        }
    }
}