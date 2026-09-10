<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Goblin extends Monstros
{
    private static $flechada;
    private static $ataqueCBastao;


    public function __construct(string $nameClass = "Goblin", float $vida = 15.3, int $armadura = 2, int $ataque = 2,){
        $this->nameClass = $nameClass;
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;

        if (self::$ataqueCBastao === null) {
            self::$ataqueCBastao = (object)[
                'dano' => 3,
                'recarga' => 3
            ];
            self::$flechada = (object)[
                'dano' => 5,
                'recarga' => 7
            ];
        }
        $this->poderes =  [self::$ataqueCBastao, self::$flechada];
    }

}