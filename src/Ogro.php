<?php
namespace Choco\JogoSimplesPhp;

class Ogro extends Monstros
{
    private static $martelada;
    private static $lancarRocha;


    public function __construct(string $nameClass = "Ogro"){
        $ogro = new Ogro();
        $ogro->setAtaque(2);
        $ogro->setVida(15.3);
        $ogro->setArmor(2);
        $this->nameClass = $nameClass;

        if (self::$martelada === null) {
            self::$martelada = (object)[
                'dano' => 7,
                'recarga' => 7
            ];
            self::$lancarRocha = (object)[
                'dano' => 10,
                'recarga' => 9
            ];
        }
        $this->poderes =  [self::$martelada, self::$lancarRocha];

    }

}