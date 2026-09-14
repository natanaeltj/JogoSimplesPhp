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
        $this->setAtaque(7);
        $this->setVida(28.3);
        $this->setArmor(6);

        if (self::$kamusari === null) {
            self::$kamusari = (object)[ //colocar em um arr
                'nome' => "Kamusari",
                'dano' => 10,
                'recarga' => 5
            ];
            self::$onigiri = (object)[
                'nome' => "Onigiri",
                'dano' => 14,
                'recarga' => 7
            ];
        }
        $this->poderes =  [self::$kamusari, self::$onigiri];
      }

}
