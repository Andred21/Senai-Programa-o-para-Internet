<?php
//Abstração de uma pizza para a programação
// Classe seria como o molde de um objeto
class PizzaCalabresa
{
    public function preparar()
    {
        echo "Colocando molho na pizza\n";
        echo "Colocando as rodelas de calabresa na pizza\n";
        echo "Colocando queijo na pizza\n";
    }
    public function assar()
    {
        echo "Assar por 15 minutos\n";
    }
    public function comercializar()
    {
        echo "Vender à R$ 50,00\n";
    }
}
class PizzaChocolate
{
    public function preparar()
    {
        echo "Passar cobertura de chocolate meio amargo\n";
        echo "Colocar cerejas nas extremidades\n";
    }
    public function assar()
    {
        echo "Assar por 8 minutos\n";
    }
    public function comercializar()
    {
        echo "Vender à R$ 30,00";
    }
}
//Criar um pizza
$pizzaCalabresa = new PizzaCalabresa();
$pizzaCalabresa->preparar();
$pizzaCalabresa->assar();
$pizzaCalabresa->comercializar();

$pizzaChocolate = new PizzaChocolate();
$pizzaChocolate->preparar();
$pizzaChocolate->assar();
$pizzaChocolate->comercializar();
