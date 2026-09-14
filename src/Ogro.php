<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Ogro extends Monstros
{
    private static $martelada;
    private static $lancarRocha;


    public function __construct(string $nameClass = "Ogro"){
        $this->nameClass = $nameClass;
        $this->setAtaque(8);
        $this->setVida(30.2);
        $this->setArmor(6);


        if (self::$martelada === null) {
            self::$martelada = (object)[
                'nome' => "Martelada",
                'dano' => 9,
                'recarga' => 8
            ];
            self::$lancarRocha = (object)[
                'nome' => "Lançar Rocha",
                'dano' => 10,
                'recarga' => 9
            ];
        }
        $this->poderes =  [self::$martelada, self::$lancarRocha];

    }

}