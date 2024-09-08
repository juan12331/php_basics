<?php

abstract class Inimigo
{
    protected int $vida;
    protected string $arma;

    public function __construct(int $vida, string $arma)
    {
        $this->vida = $vida;
        $this->arma = $arma;
    }

    abstract public function atacar();
}

class Humano extends Inimigo
{
    public function atacar()
    {
        echo "Atacando com " . $this->arma . PHP_EOL;
    }
}

class Alien extends Inimigo
{
    public function atacar()
    {
        echo "Atirando com " . $this->arma . PHP_EOL;
    }
}

$huma = new Humano(100, 'Espada');
$huma->atacar();

$alien = new Alien(150, 'Laser');
$alien->atacar();