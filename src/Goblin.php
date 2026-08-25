<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Goblin extends Monstros
{
    private object $flechada;
    private object $ataqueCBastao;


    public function __construct(string $raca = "Goblin", float $vida = 15.3, int $armadura = 2, int $ataque = 2,){
        $this->raca = $raca;
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;

        $this->ataqueCBastao = (object) [
            'dano' => 3,
            'recarga'  => 3
        ];
        $this->flechada = (object) [
            'dano' => 5,
            'recarga'  => 7
        ];
        $this->poderes =  [$this->ataqueCBastao, $this->flechada];
    }

}