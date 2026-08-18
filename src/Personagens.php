<?php
declare(strict_types=1);

namespace Choco\JogoSimplesPhp;

abstract class Personagens
{
    public int $ataque;
    public float $vida;
    public int $armadura;
    public array $poder;


    public function setAtack(int $ataque, float $vida, int $armadura ):void
    {
        $this->ataque = $ataque;
        $this->vida = $vida;
        $ataque = ($armadura / $ataque + 3) - $vida;
    }
    public function setPoder($dano, $recarga):void
    {

    }
    public function getPoder():array
    {}
}