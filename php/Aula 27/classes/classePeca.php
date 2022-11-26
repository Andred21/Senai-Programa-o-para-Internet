<?php 
namespace Classes;

use InvalidArgumentException;

 abstract class Peca{
    protected $nomePeca;
    protected $posicaoLin;
    protected $posicaoCol;

    public function movimentar($lin,$col){
        //Teste dos movimentos
        if ($lin<1 || $lin>8 || $col<1 || $col>8)
            throw new InvalidArgumentException ("Movimento inválido,linha ou coluna tem que estar entre 1 e 8!");
        //Continuação dos teste de movimento
        $this-> testaMovimento($lin,$col);
        //Se estiver tudo em ordem, alteramos as posições
        $this->posicaoLin = $lin;
        $this->posicaoCol = $col;

    }

    abstract protected function testaMovimento($lin,$col);
}