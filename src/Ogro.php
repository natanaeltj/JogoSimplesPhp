<?php
namespace Choco\JogoSimplesPhp;

class Ogro extends Monstros
{
    private object $martelada;
    private object $lancarRocha;


    public function __construct(string $raca = "Ogro", float $vida = 15.3, int $armadura = 2, int $ataque = 2){
        $this->raca = $raca;
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;

        $this->martelada = (object) [
            'dano' => 7,
            'recarga'  => 7
        ];
        $this->lancarRocha = (object) [
            'dano' => 10,
            'recarga'  => 9
        ];
        $this->poderes =  [$this->martelada, $this->lancarRocha];

    }

}