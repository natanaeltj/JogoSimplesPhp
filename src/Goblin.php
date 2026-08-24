<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Goblin extends Monstros
{
    private int $flechada;
    private int $ataqueCBastao;


    public function __construct(float $vida = 15.3, int $armadura = 2, int $ataque = 2,  int $flechada = 1, int $ataqueCBastao = 3){
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;
        $this->ataqueCBastao = $ataqueCBastao;
        $this->flechada = $flechada;
    }
    public function flechada(){}
    public function ataqueBastao(){}

}