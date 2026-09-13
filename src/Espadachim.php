<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;

use Choco\JogoSimplesPhp\Herois;

class Espadachim extends Herois
{
    private static $kamusari;
    private static $onigiri;


    public function __construct( string $nameClass = "Espadachim" ){

        $this->nameClass = $nameClass;
        $this->setAtaque(2);
        $this->setVida(23.3);
        $this->setArmor(5);

        if (self::$kamusari === null) {
            self::$kamusari = (object)[ //colocar em um arr
                'dano' => 3,
                'recarga' => 5
            ];
            self::$onigiri = (object)[
                'dano' => 5,
                'recarga' => 7
            ];
        }
        $this->poderes =  [self::$kamusari, self::$onigiri];
      }

}
