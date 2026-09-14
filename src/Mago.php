<?php
declare(strict_types = 1);
namespace Choco\JogoSimplesPhp;

class Mago extends Herois
{

    private static $bolaDeAgua;
    private static $descargaEletrica;


    public function __construct(string $nameClass = "Mago"){
        $this->nameClass = $nameClass;
        $this->setAtaque(6);
        $this->setVida(22.2);
        $this->setArmor(5);

        if (self::$bolaDeAgua === null) {
            self::$bolaDeAgua = (object)[
                'nome' => "Bola de água",
                'dano' => 10,
                'recarga' => 3
            ];
            self::$descargaEletrica = (object)[
                'nome' => "Descarga Eletrica",
                'dano' => 17,
                'recarga' => 7
            ];
        }
        $this->poderes =  [self::$bolaDeAgua, self::$descargaEletrica];
    }


}