<?php
declare(strict_types=1);
namespace Choco\JogoSimplesPhp;

class Espadachim extends Herois
{

    private static $kamusari;
    private static $onigiri;

    public function __construct(float $vida = 25.3, int $armadura = 5, int $ataque = 2, string $nameClass = "Espadachim"){
      $this->ataque = $ataque;
      $this->vida = $vida;
      $this->armadura = $armadura;
      $this->nameClass = $nameClass;
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
