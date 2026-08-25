<?php
declare(strict_types=1);

namespace Choco\JogoSimplesPhp;

abstract class Personagens
{

    protected int $ataque;
    protected float $vida;
    protected int $armadura;
    protected array $poderes;


    protected function setAtack(int $ataque, float $vida, int $armadura ):void
    {
        $this->ataque = $ataque; // quando atacar for selecionado devera puxar o dano total do monstro ou do heroi
        $this->vida = $vida;
        $ataque = ($armadura / $ataque + 3) - $vida;
    }
   public function getAtack(){
        //
    }
    protected function setPoder(array $poder, int $ataque, $recarga):void
    {
        //
    }
    protected function getPoder()
    {
        //
    }
}