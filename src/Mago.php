<?php

namespace Choco\JogoSimplesPhp;

class Mago extends Herois
{

    private static $bolaDeAgua;
    private static $descargaEletrica;


    public function __construct(string $nameClass = "Mago"){
        $mago = new Mago();
        $mago->setAtaque(2);
        $mago->setVida(19.2);
        $mago->setArmor(5);
        $this->nameClass = $nameClass;

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