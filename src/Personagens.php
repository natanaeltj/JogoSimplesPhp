<?php
declare(strict_types=1);

namespace Choco\JogoSimplesPhp;

use Choco\JogoSimplesPhp\PersonagensInterface;

abstract class Personagens implements PersonagensInterface // ataque, vida, armadura e poderes
{

    public string $nameClass;
    protected int $ataque; //precisa de um metodo set e get
    protected float $vida;
    protected int $armadura;
    protected array $poderes;

    public function getAtaque():int{
        return $this->ataque;
    }
    public function setAtaque(int $ataque):void{ // Interface é ultilizado quando diversas classe devem fazer o mesmo comportamento, é tipo um contrato
         $this->ataque = $ataque;   // e classe abstrata quando varias compartilham do mesmo codigo
    }
    public function setVida(float $vida):void{
        $this->vida = $vida;
    }
    public function getVida():float{
        return $this->vida;
    }
    public function setArmor(int $armadura):void{
        $this->armadura = $armadura;
    }
    public function getDano():void{
        $this->vida -= $this->ataque / $this->armadura + 2;
    }



}