<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Goblin extends Monstros
{
    private static $flechada;
    private static $ataqueCBastao;


    public function __construct(string $nameClass = "Goblin"){
        $goblin = new Goblin();
        $goblin->setAtaque(2);
        $goblin->setVida(15.3);
        $goblin->setArmor(2);
        $this->nameClass = $nameClass;

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