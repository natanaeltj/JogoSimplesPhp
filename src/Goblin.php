<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Goblin extends Monstros
{
    private static $flechada;
    private static $ataqueCBastao;


    public function __construct(string $nameClass = "Goblin"){
        $this->nameClass = $nameClass;
        $this->setAtaque(6);
        $this->setVida(19.2);
        $this->setArmor(5);


        if (self::$ataqueCBastao === null) {
            self::$ataqueCBastao = (object)[
                'nome' => "Ataque com bastão",
                'dano' => 3,
                'recarga' => 3
            ];
            self::$flechada = (object)[
                'nome' => "Flechada",
                'dano' => 5,
                'recarga' => 7
            ];
        }
        $this->poderes =  [self::$ataqueCBastao, self::$flechada];
    }

}