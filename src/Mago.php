<?php

namespace Choco\JogoSimplesPhp;

class Mago extends Herois
{

    private static $bolaDeAgua;
    private static $descargaEletrica;


    public function __construct(float $vida = 19.2, int $armadura = 5, int $ataque = 2 ){
        $this->ataque = $ataque;
        $this->vida = $vida;
        $this->armadura = $armadura;

        if (self::$bolaDeAgua === null) {
            self::$bolaDeAgua = (object)[
                'dano' => 10,
                'recarga' => 5
            ];
            self::$descargaEletrica = (object)[
                'dano' => 15,
                'recarga' => 7
            ];
        }
        $this->poderes =  [self::$bolaDeAgua, self::$descargaEletrica];
    }


}