<?php
namespace Choco\JogoSimplesPhp;

class Ogro extends Monstros
{
    private static $martelada;
    private static $lancarRocha;


    public function __construct(string $nameClass = "Ogro", float $vida = 15.3, int $armadura = 2, int $ataque = 2){
        $this->nameClass = $nameClass;
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;

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